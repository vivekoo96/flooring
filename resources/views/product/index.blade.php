@extends('layouts.admin')


@section('title', 'Product')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('product.create') }}" class="btn btn-info">Add Product</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Products</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Specification</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->brand->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{!! $product->spacfication !!}</td>
                                    <td> <img src="{{ asset('images/' . $product->main_image) }}" alt="$product->image"
                                            style="width:150px"></td>
                                    <td>
                                        <a href="{{ route('product.delete', ['id' => $product->id]) }}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                            class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-info"
                                            href="{{ route('product.gallery', ['id' => $product->id]) }}"><i
                                                class="fas fa-cog"></i></a>
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
