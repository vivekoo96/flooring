@extends('layouts.admin')
@section('title', 'Product')
<style>
    .checkbox-inline {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
        /* Space between each checkbox line */
    }

    .checkbox-inline input[type='checkbox'] {
        margin-right: 10px;
        margin-bottom: 10px
            /* Space between checkbox and label */
    }
</style>
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
                <form id="quickFormfff" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="brands">Select Brands</label>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="">Select Brand</option>
                                        @forelse ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
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
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Select a Brand first</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 pt-2 image-prives">
                                <img id="image-preview" src="" alt="Selected Image Preview" aria-live="polite"
                                    style="height: 100px;width:100%">
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
                            <div class="col-md-10">
                                <div id="data-fields">
                                    <div class="row data-field">
                                        <div class="col-md-10">
                                            <input type="text" name="image_name[]" placeholder="Image Name"
                                                class="form-control my-2">
                                            <input type="file" name="image_file[]" class="form-control my-2">
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Initially hidden remove button -->
                                            <button class="btn btn-danger remove-field my-2"
                                                style="display: none;">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 py-2">
                                <button class="btn btn-success" type="button" id="add-field">Add More</button>
                            </div>
                        </div>



                        <div class="card w-100">
                            <div class="card-header">
                                <p class="text-bold">Specification</p>
                            </div>
                            <div class="card-body">
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <label for="thickness">Thickness</label>
                                        <input type="text" name="thickness" id="thickness" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Width_of_Sheet">Width of Sheet</label>
                                        <input type="text" name="Width_of_Sheet" id="Width_of_Sheet"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Lenth_of_Sheet">Lenth of Shee</label>
                                        <input type="text" name="Lenth_of_Sheet" id="Lenth_of_Sheet"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <p class="text-bold">Uses Of</p>
                            </div>
                            <div class="card-body">
                                <div class="checkbox-inline">
                                    <input type="checkbox" id="checkbox1">
                                    <label for="checkbox1"><i class="fas fa-building"></i>Commercial </label>
                                </div>
                                <div class="checkbox-inline">
                                    <input type="checkbox" id="checkbox2">
                                    <label for="checkbox2"><i class="fas fa-graduation-cap"></i> Education</label>
                                </div>
                                <div class="checkbox-inline">
                                    <input type="checkbox" id="checkbox3">
                                    <label for="checkbox3"><i class="fas fa-heartbeat"></i> Healthcare</label>
                                </div>
                                <div class="checkbox-inline">
                                    <input type="checkbox" id="checkbox4">
                                    <label for="checkbox4"><i class="fas fa-futbol"></i> Sports</label>
                                </div>
                                <div class="checkbox-inline">
                                    <input type="checkbox" id="checkbox5">
                                    <label for="checkbox5"><i class="fas fa-home"></i> Residential</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="summernote" name="spacfication"></textarea>
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
                    main_image: {
                        required: true,
                        imageType: true
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
                    main_image: {
                        required: "Please provide a category image",
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
            $('.image-prives').css("display", "none");
            $('.image-colom').removeClass('col-md-4');
            $('.image-colom').addClass('col-md-6');
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
        document.addEventListener('DOMContentLoaded', function() {
            // Function to clone the field
            function cloneField() {
                var dataFields = document.getElementById('data-fields');
                var originalField = document.querySelector('.data-field');
                var newField = originalField.cloneNode(true);

                // Clear the values in the cloned fields
                newField.querySelector('input[type="text"]').value = '';
                newField.querySelector('input[type="file"]').value = '';

                // Ensure the remove button is displayed and functional
                var removeBtn = newField.querySelector('.remove-field');
                removeBtn.style.display = 'inline-block';
                removeBtn.addEventListener('click', function() {
                    this.closest('.data-field').remove();
                });

                // Append the new field
                dataFields.appendChild(newField);
            }

            // Event listener for 'Add More' button
            document.getElementById('add-field').addEventListener('click', function() {
                cloneField();
            });

            // Event listener for the initial 'Remove' button
            var initialRemoveBtn = document.querySelector('.remove-field');
            initialRemoveBtn.addEventListener('click', function() {
                this.closest('.data-field').remove();
            });
        });


        $(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 200
            });
        })
    </script>
@endsection
