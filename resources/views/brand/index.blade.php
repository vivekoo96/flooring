@extends('layouts.admin')


@section('title', 'Brand')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('brand.create') }}" class="btn btn-info"> Add Brand</a>
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
                    <h3 class="card-title">All Brands</h3>
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
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->name }}</td>
                                    <td> <img src="{{ asset('images/' . $brand->image) }}" alt="$brand->image"
                                            style="width:150px"></td>
                                    <td>
                                        <a href="{{ route('brand.delete', ['id' => $brand->id]) }}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('brand.edit', ['id' => $brand->id]) }}" class="btn btn-success"><i
                                                class="fa fa-edit"></i></a>
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
