<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category</h1>
                </div><!-- col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                                        <select class="custom-select custom-select-sm form-control form-control-sm" style="width:35%">
                                            <option value="1">2</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="100">All</option>
                                        </select>
                                        entries
                                    </label>
                                </div>
                                <div class="col-2">
                                    <a class="btn btn-primary btn-block" href="/admin/category/add" role="button">
                                        Create
                                    </a>
                                </div>
                                <div class="col-5">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;margin-left:60%;">
                                            <input type="text" class="form-control float-right" placeholder="Search">
                
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
                                        <th>Main Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->main_category }}</td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>
                                                <i class="fas fa-edit text-warning" aria-hidden="true"></i>
                                                <i class="fas fa-trash text-danger ml-2" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- card-body -->
                        <!-- card-footer -->
                        <div class="card-footer">
                            <div class="card-tools row">
                                <div class="col-6">
                                    <p>
                                        <b>2</b>
                                        out of 
                                        <b>40</b>
                                    </p>

                                </div>
                                <div class="col-6">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
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