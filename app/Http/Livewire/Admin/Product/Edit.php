<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\models\Category;
use App\Models\Product;
use App\models\ProductAttribute;
use App\models\ProductImage;
use Validator;
use Str;

class Edit extends Component
{
    use WithFileUploads;
    public $product_id;
    public $size = [];
    public $images = [];
    public $old_images = [];
    public $tmp_images = [];
    public $main_categories = [
        "cosmetics",
        "jewelry"
    ];
    
    public $categories = [];
    
    public $image_message;
    public $name, $price, $description, $stock, $category, $manufacturer;
    
    public function addSize(){
        $this->size[] = "";
    }

    public function removeSize($i){
        if(count($this->size) > 1){
            unset($this->size[$i]);
        }
        $errors = $this->getErrorBag();
        $errors->add("size.$i", "Atleast 1 Size is required");
    }

    protected $image_rules = [
        'images.*' => 'mimes:jpg,jpeg,png|max:1000'
    ];

    protected $rules = [
        "name" => "required",
        "category" => "required",
        "manufacturer" => "required",
        "stock" => "required|integer|min:1",
        "price" => "required|integer|min:1",
        "description" => "required",
        'images.*' => 'required',
        'size.*' => 'required'
    ];

    protected $messages = [
        "name.required" => "Product Name is required",
        'images.*' => [
            'required' => 'image is required',
            'mime' => 'image should be in JPG, JPEG or PNG Format',
            'max' => 'image size should be 1MB or less'
        ],
        "stock" => [
            "required" => "Stock is required",
            "number" => "Stock should be number",
            "min" => "Stock should be 1 or greater"
        ],
        "size.*" => [
            "required" => "Size is required",
        ],
        "price" => [
            "required" => "Price is required",
            "number" => "Price should be number",
            "min" => "Price should be 1 or greater"
        ],
        "description" => "Descripiton is required"
    ];

    public function updatingImages($images){
        $this->tmp_images = $this->images;
    }

    public function updatedSize(){
        $i = count($this->size) - 1;
        $size = $this->size[$i];
        unset($this->size[$i]);
        if(in_array($size, $this->size)){
            $errors = $this->getErrorBag();
            // With this error bag instance, you can do things like this:
            $errors->add("size.$i", "Size already exists");
        }
        $this->size[$i] = $size;
    }
    
    public function updatedImages(){
        // dd([$this->images, $images]);
        $validator = Validator::make(['images' => $this->images], $this->image_rules, [
            'images.*' => [
                'mime' => 'image should be in JPG, JPEG or PNG Format',
                'max' => 'image size should be 1MB or less'
            ]
        ]);
        if($validator->fails()){
            // dd($this->tmp_images);
            $this->images = $this->tmp_images;
            // This will give you full access to the error bag.
            $errors = $this->getErrorBag();
            // With this error bag instance, you can do things like this:
            foreach($validator->errors()->get('images.*') as $err){
                $errors->add('images.*', $err[0]);
            }
        }
        else{
            $this->images = array_merge($this->tmp_images,$this->images);
        }
    }

    public function removeImage($index){
        unset($this->images[$index]);
    }

    public function removeOldImage($index){
        unset($this->images[$index]);
    }

    public function updated($field){
        // dd($field);
        $this->validateOnly($field, $this->rules);
    }
    
    public function save(){
        // $this->validate($this->rules, $this->messages);
        $validator = Validator::make((array)$this, $this->rules, $this->messages);
        
        if($validator->fails()){
            $errors = $this->getErrorBag();
            // With this error bag instance, you can do things like this:
            foreach($validator->errors()->messages() as $key => $err){
                $errors->add($key, $err[0]);
            }
        }
        else if(count($this->images) < 1 && count($this->old_images) < 1){
            $errors = $this->getErrorBag();
            $errors->add('images.*', "Upload atleast 1 image");
        }
        else{
            // dd($this->product_id);
            $product = Product::find($this->product_id);
            $product->category_id = $this->category;
            $product->stock = $this->stock;
            $product->price = $this->price;
            $product->manufacturer = $this->manufacturer;
            $product->name = $this->name;
            $product->description = $this->description;
            if($product->save()){
                $sizes = ProductAttribute::where('product_id', $product->id)->get();
                foreach($sizes as $size){
                    $size->delete();
                }
                $images = ProductImage::where('product_id', $product->id)->get();
                foreach($images as $image){
                    $image->delete();
                }
                foreach($this->size as $size){
                    $product_attribute = new ProductAttribute;
                    $product_attribute->product_id = $product->id;
                    $product_attribute->key = 'size';
                    $product_attribute->value = $size;
                    $product_attribute->save();
                }
                foreach($this->images as $key => $image){
                    $filename = 'IMG-'.time()."-".rand();
                    $image->storeAs('public', $filename);
                    $product_image = new ProductImage;
                    $product_image->product_id = $product->id;
                    $product_image->image = $filename;
                    $product_image->save();
                }
                foreach($this->old_images as $key => $image){
                    $product_image = new ProductImage;
                    $product_image->product_id = $product->id;
                    $product_image->image = $image->image;
                    $product_image->save();
                }
                session()->flash('message', 'Product has been updated successfully');
            }
            return redirect()->route('admin.product');
        }
    }

    public function mount($id){
        $this->product_id = $id;
        // dd($this->product_id);
        $product = Product::find($id);
        if(empty($product)){
            return redirect()->route('admin.product')->with('errors', 'product not found');
        }
        $sizes = $product->sizes;
        if(!empty($sizes)){
            foreach($sizes as $size){
                $this->size[] = $size->value;
            }
        }
        else{
            $this->size[] = "";
        }
        $this->categories = Category::where('status', 'active')->get();
        $this->stock = $product->stock;
        $this->name = $product->name;
        $this->category = $product->category_id;
        $this->manufacturer = $product->manufacturer;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->old_images = $product->images;
    }

    public function render()
    {
        return view('livewire.admin.product.edit')->layout('layouts.admin.home');
    }
}
