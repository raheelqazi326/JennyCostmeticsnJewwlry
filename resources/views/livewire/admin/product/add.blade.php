<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Product</h1>
                </div><!-- col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/product">Product</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div><!-- col -->
            </div><!-- row -->
            @include('layouts.messages')
        </div><!-- container-fluid -->
    </div>
    <!-- content-header -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <form wire:submit.prevent="save">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter name of product" wire:model.lazy="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col">                            
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="number" class="form-control" wire:model.lazy="price">
                                            </div>
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="number" class="form-control" wire:model.lazy="stock">
                                            @error('stock')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control textarea" wire:model.lazy="description" placeholder="Description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" wire:model.lazy="category">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}" @if($loop->first) selected @endif>{{ $cat->name." - ".$cat->main_category }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Manufactures</label>
                                    <input type="text" class="form-control" wire:model.lazy="manufacturer">
                                    @error('manufacturer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="col pl-0">
                                    <label>Size</label>
                                        @foreach ($size as $i => $item)
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <input type="text" class="form-control" wire:model.lazy="size.{{ $i }}">
                                                    @error("size.$i")
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-1">
                                                    <button type="button" class="btn btn-danger btn-block" wire:click="removeSize({{ $i }})"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="row mt-2">
                                            <div class="col-2">
                                                <button type="button" class="btn btn-success btn-block" wire:click="addSize()">ADD <i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <!-- File Input -->
                                    <div class="form-group">
                                        <input type="file" name="images" id="images" style="display:none" wire:model.lazy="images" multiple>
                                        <label for="images" class="btn btn-primary">
                                            Upload <i class="fa fa-plus" aria-hidden="true"></i>
                                        </label>
                                        @error('images.*')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
    
                                    <!-- Progress Bar -->
                                    <div x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        @if (!empty($images))
                                            <table class="table table-striped table-inverse">
                                                <div class="table-caption">
                                                    <h2>
                                                        Images
                                                    </h2>
                                                </div>
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th>Preview</th>
                                                        <th>Cover Image</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($images as $key => $image)
                                                        <tr>
                                                            <td scope="row">
                                                                <img src="{{ $image->temporaryUrl() }}" width="100" height="100">
                                                            </td>
                                                            <td>
                                                                <input type="radio" wire:model.lazy="coverimage" name="coverimage" value="{{$key}}" {{ $loop->first?"checked":"" }}>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})"> <i class="fa fa-trash" aria-hidden="true"></i> Remove Image</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-2 offset-10" wire:loading.remove>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 offset-10" wire:loading>
                                    <div class="row">
                                        <button type="button" disabled class="btn btn-primary btn-block">Loading ..</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>