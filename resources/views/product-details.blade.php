@extends('layouts.base')
@section('title', 'Product')
@section('content')
    <section class="about-main-container">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-8 col-lg-8 col-sm-12 about-main-left">
                    <div class="about-main-text">
                        <h1 class="text-light" style="line-height: 60px">About Product</h1>
                        <p class="text-light py-4" style="text-align: justify">
                            {!! $product->spacfication !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 text-center">
                    <img src="{{ asset('assets/groupImagewoood.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="materials-section">
        <div class="container-fluid materials-text">
            <div class="row materials">
                <div class="col-12">
                    <h2 class="text-center">Product Type</h2>
                </div>
            </div>
        </div>
        <div class="container materials-container py-5">
            <div class="row materials-cerile1 p-4">
                @forelse ($product->productItem as $productItem)
                    <div class="col">
                        <div class="materials-content">
                            <div class="image-container">
                                <img src="{{ asset('images/' . $productItem->image_file) }}" alt="">
                            </div>
                            <div class="text-container">
                                <p>
                                    {{ $productItem->image_name }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

        </div>
        <div class="container">
            <div class="row project-gallery">
                <div class="col-12">
                    <h2 class="project-gallery-heading text-center mb-5">
                        Project Gallery
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
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


@endsection
