@extends('layouts.admin')


@section('title', 'Product Gallery')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('product.index') }}" class="btn btn-info">All Products</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Product Gallery</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('add.product.item') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="image_name" placeholder="Image Name"
                                        class="form-control my-2">
                                    <input type="file" name="image_file" class="form-control my-2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Products Gallery</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productItems as $item)
                            <tr>
                                <td>{{ $item->image_name }}</td>
                                <td> <img src="{{ asset('images/' . $item->image_file) }}" alt="$item->image_file"
                                        style="width:150px"></td>
                                <td>
                                    <a href="{{ route('product.gallery.delete', ['id' => $item->id]) }}"
                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        </div>
    </section>

@endsection
