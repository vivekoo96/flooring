@extends('layouts.base')
@section('title', 'About')
@section('content')
    <section class="about-main-container">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-8 col-lg-8 col-sm-12 about-main-left">
                    <div class="about-main-text">
                        <h1 class="text-light" style="line-height: 60px">Stader Quality</h1>
                        <h1 class="text-light secound-h1" style="line-height: 60px">Stader Materials</h1>
                        <p class="text-light py-4" style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id enim
                            ipsum mollitia expedita, cum consectetur fugiat soluta, rerum
                            omnis, voluptatem earum a quam libero cupiditate rem. Ea
                            laudantium et neque qui, impedit at officia quas rerum dicta dolor
                            atque recusandae illum fugiat culpa quae quos debitis id obcaecati
                            dignissimos labore.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 text-center">
                    <img src="{{ asset('assets/groupImagewoood.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="about-company-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-light about-company text-center">
                    About Company
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="text-light" style="text-align: justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
                        eveniet quam recusandae optio, nesciunt doloribus iusto. Deleniti,
                        optio possimus aperiam doloremque iusto pariatur quis architecto
                        quisquam rem quod, consectetur facilis culpa quas, consequuntur
                        fuga. Dicta perferendis corporis doloremque laborum neque odit in
                        iure quo, quasi aspernatur amet quis officiis modi totam iste
                        repellat et architecto deleniti earum culpa illo sint reprehenderit.
                        Explicabo quibusdam enim molestias. Ut excepturi dolorum quo fugit
                        voluptatem culpa, tempore blanditiis corporis. Magnam dicta natus
                        deserunt, nobis amet ducimus dolore cupiditate? Eligendi illo illum
                        explicabo? Voluptatibus veritatis officia reprehenderit nam aliquam
                        blanditiis? Voluptatibus unde veniam saepe doloribus.
                    </p>

                    <p class="mt-5 text-light" style="text-align: justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae
                        perferendis similique velit excepturi ex tempora quisquam iusto
                        officiis aliquid consequatur laudantium labore quos, at eius. Culpa
                        dicta molestias laboriosam corporis, ducimus distinctio non nobis
                        placeat, assumenda sequi consequatur doloribus aliquid nesciunt
                        dignissimos praesentium commodi quas, perferendis voluptates! Ut
                        dignissimos excepturi autem laudantium molestias nihil voluptas
                        accusamus omnis iusto voluptatem, odio laboriosam ullam optio
                        cupiditate nostrum magni et. Minus praesentium quod, fuga rem fugiat
                        odit nemo! Eos ratione doloribus alias repellendus obcaecati
                        quisquam quos eaque, nemo hic sint quam accusamus odio in vero ab.
                        Atque illum id, odio laboriosam amet aliquam?
                    </p>

                    <p class="text-light mt-5"style="text-align: justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam
                        quisquam quos eos nobis, explicabo excepturi esse odio officia ab
                        unde illum at. Alias doloremque voluptas error esse beatae quaerat
                        ex dolorum ab, molestiae, facilis possimus animi vero reprehenderit
                        cupiditate fuga, non optio suscipit sapiente sint! Voluptate
                        recusandae quas molestias error sequi, accusantium possimus officia
                        voluptatum ratione adipisci. Officiis aliquam maxime in sapiente
                        ipsam, enim voluptatem sed excepturi ullam aperiam ipsa voluptatum
                        dolorum consequatur exercitationem vitae at mollitia laudantium
                        necessitatibus voluptate quo commodi corporis. Similique nihil ea
                        accusantium nesciunt veritatis incidunt temporibus quod libero
                        blanditiis, itaque, corrupti minus dicta nisi doloribus.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-section-container">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="vision text-light text-center">
                        Company <span class="text-decoration-underline">Vision</span> & Mission
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img src="{{ asset('assets/eye.png') }}" alt="eye" />
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <p class="text-light px-4" style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                        architecto obcaecati fuga maiores soluta odit impedit, nostrum ab
                        consectetur animi, doloremque doloribus, ducimus minima sunt
                        officiis nemo nam! Officia dolorem ut corporis eos temporibus
                        ratione vel velit hic repudiandae perspiciatis laborum obcaecati,
                        provident, sit voluptatem soluta quod tempore quisquam voluptatum.
                    </p>
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
