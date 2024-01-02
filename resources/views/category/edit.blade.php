@extends('layouts.admin')
@section('title', 'Category')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('category.index') }}" class="btn btn-info">All Categories</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>
                </div>
                <form id="quickFormdddd" method="post" action="{{ route('category.update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $category->name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="brands">Select Brands</label>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="">Select Brand</option>
                                        @forelse ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ $brand->id == $category->brand_id ? 'selected' : '' }}>
                                                {{ $brand->name }}</option>
                                        @empty
                                            <option value="">Not Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="image">Current Image:</label>
                                    <img src="{{ asset('images/' . $category->image) }}"
                                        alt="{{ $category->image }}
                            " width="150">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function() {

            $('#quickFormdddd').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    brand_id: {
                        required: true,
                    },

                },
                messages: {
                    name: {
                        required: "Please enter a category name",
                    },
                    brand_id: {
                        required: "Please select a brand",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
