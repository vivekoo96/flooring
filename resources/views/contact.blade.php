@extends('layouts.base')
@section('title', 'Contact')
@section('content')
    <section class="contact-us-container">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container-location p-5">
                        <p class="text-light">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Directions to Hotel Ibis Gurgaon, Sector 53, DLF Golf Course Road,
                            Sector 53, Gurgaon, Haryana, India
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container-location p-5">
                        <p class="text-light p-4">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            regent123@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container-location p-5">
                        <p class="text-light p-4">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            +91 20212 12121
                        </p>
                    </div>
                </div>
            </div>


            <div class="row pt-5 pb-5">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container-location p-5">
                        <p class="text-light">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Directions to Hotel Ibis Gurgaon, Sector 53, DLF Golf Course Road,
                            Sector 53, Gurgaon, Haryana, India
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container-location p-5">
                        <p class="text-light p-4">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            regent123@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="container-location p-5">
                        <p class="text-light p-4">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            +91 20212 12121
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14020.439463592036!2d77.38985960000001!3d28.53641725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1702536338690!5m2!1sen!2sin"
                            width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
