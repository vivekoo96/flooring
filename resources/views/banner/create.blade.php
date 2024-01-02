@extends('layouts.admin')
@section('title', 'Banner')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Banner</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('banner.index') }}" class="btn btn-info">All Banners</a>
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
                    <h3 class="card-title">Banner</h3>
                </div>
                <form id="quickForm" method="post" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="short_desc">Short Desc</label>
                                    <input type="text" name="short_desc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img id="image-preview" src="{{ asset('images/1703599457_vlogo.png') }}"
                                    alt="Selected Image Preview" aria-live="polite" style="height: 300px;width:100%">
                                <div class="loading-spinner" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-8 pt-2 image-colom">
                                        <label for="main_image">Select Image</label>
                                        <div class="form-group image-upload">
                                            <input class="form-control" type="file" name="main_image" id="main_image"
                                                accept="image/*">
                                        </div>
                                    </div>
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

            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    content: {
                        required: true,
                    },
                    position: {
                        required: true,
                    },

                },
                messages: {
                    name: {
                        required: "Please enter  name",
                    },
                    content: {
                        required: "Please enter  content",
                    },
                    position: {
                        required: "Please enter  position",
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
            $('.image-prives').css("display", "none");
            $('#main_image').on('change', function() {
                var file = $(this).prop('files')[0];
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


@endsection
