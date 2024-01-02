@extends('layouts.admin')


@section('title', 'Testimonials')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Testimonials</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('testimonial.create') }}" class="btn btn-info">Add Testimonial</a>
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
                    <h3 class="card-title">All Testimonials</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Content</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->content }}</td>
                                    <td>{{ $testimonial->position }}</td>
                                    <td>
                                        <a href="{{ route('testimonial.delete', ['id' => $testimonial->id]) }}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('testimonial.edit', ['id' => $testimonial->id]) }}"
                                            class="btn btn-success"><i class="fa fa-edit"></i></a>
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
