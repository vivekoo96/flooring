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
                        <a href="{{ route('product.index') }}" class="btn btn-info">All Products</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Product</h3>
                </div>
                <form id="quickFormfff" method="post" action="{{ route('product.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="brands">Select Brands</label>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="">Select Brand</option>
                                        @forelse ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                                {{ $brand->name }}</option>
                                        @empty
                                            <option value="">Not Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    @php
                                        $category = App\Models\Category::find($product->category_id);
                                    @endphp
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Select a Brand first</option>
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 pt-2 image-prives">
                                <img id="image-preview" src="{{ asset('images/' . $product->main_image) }}"
                                    alt="Selected Image Preview" aria-live="polite" style="height: 100px;width:100%">
                                <div class="loading-spinner" style="display: none;"></div>
                            </div>
                            <div class="col-md-4 pt-2 image-colom">
                                <label for="main_image">Select Image</label>
                                <div class="form-group image-upload">
                                    <input class="form-control" type="file" name="main_image" id="main_image"
                                        accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="summernote" name="spacfication">{{ $product->spacfication }}</textarea>
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

            $('#quickFormfff').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    brand_id: {
                        required: true,
                    },
                    category_id: {
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
                    category_id: {
                        required: "Please select a Category",
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

    <script>
        $(document).ready(function() {
            $('#brand_id').on('change', function() {
                var brandId = $(this).val();
                $.ajax({
                    url: '/get-categories/' + brandId, // Route for fetching subcategories
                    success: function(categories) {
                        $('#category_id').prop('disabled', false);
                        $('#category_id').html('');

                        $.each(categories, function(key, category) {
                            $('#category_id').append('<option value="' + category.id +
                                '">' + category.name + '</option>');
                        });
                    }
                });
            });
        });


        $(document).ready(function() {
            // $('.image-prives').css("display", "none");
            // $('.image-colom').removeClass('col-md-4');
            // $('.image-colom').addClass('col-md-6');
            $('#main_image').on('change', function() {
                var file = $(this).prop('files')[0];
                $('.image-colom').addClass('col-md-4');
                $('.image-colom').removeClass('col-md-6');
                $('.image-prives').css("display", "block");
                if (file) {
                    var reader = new FileReader();
                    reader.onloadstart = function() {
                        $('.loading-spinner').show();
                    };
                    reader.onload = function(e) {
                        $('.loading-spinner').hide();
                    };
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                    $('#image-preview').removeAttr('src');

                } else {
                    console.error('Error: No image selected.');
                }

            });
        });
    </script>

    <script>
        $(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 200
            });
        });
    </script>
@endsection
