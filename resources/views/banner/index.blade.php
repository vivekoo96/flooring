@extends('layouts.admin')


@section('title', 'Banner')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Banners</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('banner.create') }}" class="btn btn-info">Add Banner</a>
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
                    <h3 class="card-title">All Banners</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banners as $banner)
                                <tr>
                                    <td>{{ $banner->title }}</td>
                                    <td> <img src="{{ asset('images/' . $banner->banner) }}" alt="$banner->image"
                                            style="width:150px"></td>
                                    <td>
                                        <a href="{{ route('banner.delete', ['id' => $banner->id]) }}"
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
