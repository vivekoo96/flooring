@extends('layouts.base')

@section('banner')
    @php
        $banners = App\Models\Banner::all();
    @endphp
    <div class="carousel-container-fluid w-100">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($banners as $key => $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                    {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button> --}}
                @endforeach

            </div>

            <div class="carousel-inner">
                @foreach ($banners as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('images/' . $item->banner) }}" class="d-block w-100" alt="{{ $item->banner }}">
                    </div>
                @endforeach

                {{-- <div class="carousel-item">
                        <img src="{{ asset('assets/background1.jpeg') }}" class="d-block w-100" alt="...">
                    </div> --}}
                {{-- <div class="carousel-item">
                        <img src="{{ asset('assets/background1.jpeg') }}" class="d-block w-100" alt="...">
                    </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
@section('content')

    <section class="product-section">
        <div class="product-oppacity">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="product-text">Our Products</h2>
                    </div>
                </div>
                <div class="row secound-container category-row">
                    <div class="col-custom product-container product-border">
                        <div class="cricle">
                            <div class="smallcrecile">
                                <img src="{{ asset('assets/house.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="content-items">
                                <h2>Commercial</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-custom product-container product-border">
                        <div class="cricle">
                            <div class="smallcrecile">
                                <img src="{{ asset('assets/degree.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="content-items">
                                <h2>Education</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-custom product-container product-border">
                        <div class="cricle">
                            <div class="smallcrecile">
                                <img src="{{ asset('assets/heart.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="content-items">
                                <h2>Healthcare</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-custom product-container product-border">
                        <div class="cricle">
                            <div class="smallcrecile">
                                <img src="{{ asset('assets/sport1.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="content-items">
                                <h2>Sports</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-custom product-container product-border">
                        <div class="cricle">
                            <div class="smallcrecile">
                                <img src="{{ asset('assets/Residential.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="content-items">
                                <h2>Residential</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <section class="materials-section">
        <div class="container-fluid materials-text">
            <div class="container">
                <div class="row materials">
                    <div class="col-12 ">
                        <ul class="nav nav-pills mb-3 w-100 h-100 d-flex justify-content-center" id="pills-tab"
                            role="tablist">
                            <li class=" tab-li nav-item w-50 h-100 d-flex justify-content-center " role="presentation">
                                <button class=" tab-button active  w-100 " style="height: 150px" id="pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">
                                    <img src="{{ asset('images/llg.png') }}" class="h-50" alt="logo" />
                                    <p class="h3 text-light py-2">Regent Products</p>

                                </button>
                            </li>
                            <li class=" tab-li nav-item w-50 h-100 d-flex justify-content-center" role="presentation">
                                <button class="tab-button  w-100" style="height: 150px" id="pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    <img src="{{ asset('images/K3logo.png') }}" class="h-50" alt="logo" />
                                    <p class="h3 text-light py-2">K3 Products</p>


                                </button>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <div class="container materials-container py-5">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"aria-labelledby="pills-home-tab">
                    <div class="row materials-cerile1 p-4">
                        @forelse ($Regent as $brand)
                            @forelse ($brand->products as $product)
                                <div class="col">
                                    <a href="{{ route('product_details', ['id' => $product->id]) }}">
                                        <div class="materials-content">
                                            <div class="image-container">
                                                <img src="{{ asset('images/' . $product->main_image) }}" alt="">
                                            </div>
                                            <div class="text-container">
                                                <p>
                                                    {{ $product->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                            @endforelse
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row materials-cerile1 p-4">

                        @forelse ($k3 as $brand)
                            @forelse ($brand->products as $product)
                                <div class="col">
                                    <a href="{{ route('product_details', ['id' => $product->id]) }}">
                                        <div class="materials-content">
                                            <div class="image-container">
                                                <img src="{{ asset('images/' . $product->main_image) }}" alt="">
                                            </div>
                                            <div class="text-container">
                                                <p>
                                                    {{ $product->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                            @endforelse
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="gallery">
        <div class="container">
            <div class="row project-gallery">
                <div class="col-12">
                    <h2 class="project-gallery-heading text-center mb-5">
                        Project Gallery
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row project-gallery-content p-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-gallary-project d-lg-flex justify-content-start p-5">
                        <div class="product-cericle"></div>
                        <div class="texting">
                            <p class="loaction">Surat, India</p>
                            <span class="product_name">Titanium Collection</span>
                        </div>
                    </div>
                    <p class="text-light" style="text-align: justify">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut
                        adipisci, excepturi similique libero molestias officia. Ipsum
                        aspernatur natus obcaecati culpa saepe aut, explicabo eaque hic
                        eligendi, vitae ratione voluptates velit! Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Nulla, quidem, ratione enim dolor
                        placeat ab pariatur molestias voluptatibus veritatis quisquam sed
                        amet facere natus iure laborum est debitis aut quos illo, culpa quo.
                        Exercitationem, fugiat quae eum et, quod assumenda nisi atque sequi
                        beatae natus, qui maxime fugit quia amet odit ab saepe voluptatum.
                        Facilis dolorum cumque beatae impedit amet fugit facere asperiores,
                        provident nostrum obcaecati quos quasi qui ducimus alias aut sequi
                        nesciunt, nihil possimus quae explicabo. Ratione, ea.
                    </p>
                    <a href="">Contact</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <section class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{ asset('assets/bestc.png') }}" alt="" />
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('assets/bestc.png') }}" alt="" />
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('assets/bestc.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>



    <section class="testimonials">
        <div class="container">`
            <div class="row">
                <div class="col-12">
                    <h2 class="our-testimonials text-center">Our Testimonials</h2>
                </div>
                <div class="container-xl">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial">
                                                            <p style="text-align: justify">
                                                                Lorem ipsum dolor sit amet, consec adipiscing
                                                                elit. Nam eusem scelerisque tempor, varius quam
                                                                luctus dui. Mauris magna metus nec.
                                                            </p>
                                                            <p class="overview">
                                                                <b>Paula Wilson</b>, Media Analyst
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial">
                                                            <p style="text-align: justify">
                                                                Vestibulum quis quam ut magna consequat
                                                                faucibus. Pellentesque eget mi suscipit
                                                                tincidunt. Utmtc tempus dictum. Pellentesque
                                                                virra.
                                                            </p>
                                                            <p class="overview">
                                                                <b>Antonio Moreno</b>, Web Developer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial">
                                                            <p style="text-align: justify">
                                                                Lorem ipsum dolor sit amet, consec adipiscing
                                                                elit. Nam eusem scelerisque tempor, varius quam
                                                                luctus dui. Mauris magna metus nec.
                                                            </p>
                                                            <p class="overview">
                                                                <b>Michael Holz</b>, Seo Analyst
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial">
                                                            <p style="text-align: justify">
                                                                Vestibulum quis quam ut magna consequat
                                                                faucibus. Pellentesque eget mi suscipit
                                                                tincidunt. Utmtc tempus dictum. Pellentesque
                                                                virra.
                                                            </p>
                                                            <p class="overview">
                                                                <b>Mary Saveley</b>, Web Designer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial">
                                                            <p style="text-align: justify">
                                                                Lorem ipsum dolor sit amet, consec adipiscing
                                                                elit. Nam eusem scelerisque tempor, varius quam
                                                                luctus dui. Mauris magna metus nec.
                                                            </p>
                                                            <p class="overview">
                                                                <b>Martin Sommer</b>, UX Analyst
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial">
                                                            <p style="text-align: justify">
                                                                Vestibulum quis quam ut magna consequat
                                                                faucibus. Pellentesque eget mi suscipit
                                                                tincidunt. Utmtc tempus dictum. Pellentesque
                                                                virra.
                                                            </p>
                                                            <p class="overview">
                                                                <b>John Williams</b>, Web Developer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-section">
        <div class="container">
            <div class="row contact-us">
                <div class="col-12">
                    <h2 class="text-center">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="conact-us-form">
                <div class="row my-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" name="first_name" id="first_name" placeholder="First Name"
                            class="form-control" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" name="last_name" placeholder="Last Name" id="last_name"
                            class="form-control" />
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="text" placeholder="Phone Number" name="phone_number" id="phone_number"
                            class="form-control" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <select name="branch" id="branch" class="form-control">
                            <option value="">Select Branch</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Bengaluru">Bengaluru</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <textarea name="message" placeholder="Message" id="message" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5 text-center">
                        <button type="submit text-light">Send</button>
                    </div>
                </div>
            </div>
        </div>




    </section>


    {{-- </div> --}}
@endsection
