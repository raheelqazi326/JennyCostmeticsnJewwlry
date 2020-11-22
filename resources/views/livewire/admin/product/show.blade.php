<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product</h1>
                </div><!-- col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div><!-- col -->
            </div><!-- row -->
            @include('layouts.messages')
        </div><!-- container-fluid -->
    </div>
    <!-- content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                            <div class="row">
                                <div class="col-5">
                                    <label class="enteries">
                                        Show
                                        <select class="custom-select custom-select-sm form-control form-control-sm" wire:model='perPage' style="width:35%">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            @if (!empty($products))
                                            <option value="{{$products->total()}}">All</option>
                                            @endif
                                        </select>
                                        entriesf
                                </div>
                                <div class="col-2">
                                    <a class="btn btn-primary btn-block" href="/admin/product/add" role="button">
                                        Create
                                    </a>
                                </div>
                                <div class="col-5">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;margin-left:60%;">
                                            <input 
                                                type="text"
                                                class="form-control float-right" 
                                                wire:model='search'
                                                wire:keydown.escape='resetSearch'
                                                wire:keydown.tab='resetSearch'
                                                wire:keydown.enter='resetSearch'
                                                placeholder="Search"
                                             >
                
                                            {{-- <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Descripiton</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Main Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($products))
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->index+$products->firstItem() }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->category->main_category }}</td>
                                                <td><span class="badge badge-{{ $product->status=='active'?'success':'danger' }}">{{ ucfirst($product->status) }}</span></td>
                                                <td>
                                                    <a href="{{ route('admin.editproduct', ['id'=>$product->id]) }}">
                                                        <i class="fas fa-edit text-warning" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" wire:click="delete({{$product->id}})">
                                                        <i class="fas fa-trash text-danger ml-2" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach    
                                    @endif

                                </tbody>
                            </table>
                        </div>
                        <!-- card-body -->
                        <!-- card-footer -->
                        <div class="card-footer">
                            @if (!empty($products))
                                <div class="card-tools row">
                                    <div class="col-6">
                                        <p>
                                            Showing 
                                            <b>{{$products->firstItem()}}</b>
                                            to 
                                            <b>{{$products->lastItem()}}</b>
                                            out of 
                                            <b>{{$products->total()}}</b>
                                        </p>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="float-right">
                                        {{$products->links()}}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- card-footer -->
                    </div>
                    <!-- card -->
                </div>
            </div>
            <!-- row -->
        </div>
    </section>
</div>  