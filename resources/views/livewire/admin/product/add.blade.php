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
                        <div class="card-body mb-3">
                            {{-- <div class="card text-center"> --}}
                              <div class="card-header mb-4">
                                <ul class="nav nav-tabs card-header-tabs">
                                  <li class="nav-item">
                                    <a class="nav-link {{ $tab == 'information'?'active':'' }}" wire:click.prevent="changeTab('information')" href="#">Information</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link {{ $tab == 'association'?'active':'' }}" wire:click.prevent="changeTab('association')" href="#">Association</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link {{ $tab == 'images'?'active':'' }}" wire:click.prevent="changeTab('images')" href="#">Images</a>
                                  </li>
                                </ul>
                              </div>
                            {{-- </div> --}}
                            <form wire:submit.prevent="save">
                                @if ($tab == 'information')
                                    {{-- <div class="form-group">
                                        <label>Tabs</label>
                                        <div x-data="{ open: false }">
                                            <input type="text" @keyup="open = true">
                                            <ul x-show="open" @click.away="open = false">
                                                @foreach ($tabs as $singleTab)
                                                    <li>{{ $singleTab }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Enter name of product" wire:model="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>SKU</label>
                                        <input type="text" class="form-control" wire:model="sku" readonly>
                                        @error('sku')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <input type="number" class="form-control" wire:model="stock">
                                        @error('stock')
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
                                                    <input type="number" class="form-control" wire:model="price">
                                                </div>
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Unit Measurement (UM)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">Per</span>
                                                    </div>
                                                    <input type="text" class="form-control" wire:model="um">
                                                </div>
                                                @error('um')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control textarea" wire:model="description" placeholder="Description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-2 offset-10" wire:loading.remove>
                                        <div class="col">
                                            <button type="button" wire:click="changeTab('association')" class="btn btn-primary btn-block">Next</button>
                                        </div>
                                    </div>
                                @elseif ($tab == 'association')
                                    <div class="form-group">
                                        <label>Main Category</label>
                                        <select class="form-control" wire:model="main_category">
                                            <option>Please select an option</option>
                                            @foreach ($main_categories as $main_category)
                                                <option value="{{ $main_category }}">{{$main_category}}</option> 
                                            @endforeach
                                        </select>
                                        @error('main_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" class="form-control" wire:model="category">
                                        @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Manufactures</label>
                                        <input type="text" class="form-control" wire:model="manufactures">
                                        @error('manufactures')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="col pl-0">
                                        <label>Size</label>
                                            <div class="row">
                                                <div class="col-10">
                                                    <input type="text" class="form-control" wire:model="manufactures">
                                                    @error('size')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-success btn-block"><b>+</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 offset-8" wire:loading.remove>
                                        <div class="row">
                                            <div class="col">
                                                <button type="button" wire:click="changeTab('information')" class="btn btn-primary btn-block">Previous</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" wire:click="changeTab('images')" class="btn btn-primary btn-block">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($tab == 'images')
                                    <div class="col-4 offset-8" wire:loading.remove>
                                        <div class="row">
                                            <div class="col">
                                                <button type="button" wire:click="changeTab('association')" class="btn btn-primary btn-block">Previous</button>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
        </div>
    </section>
</div>
@push('script')
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/summernote/summernote-bs4.css') }}">
    <script src="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endpush