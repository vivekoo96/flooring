<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vinyl | @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100;200;300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/dist/css/splide.min.css') }}" />
    <script src="{{ asset('assets/dist/js/splide.min.js') }}"></script>
</head>

<body>
    <section class="header-container">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid mx-lg-5">
                    <a class="navbar-brand me-auto text-light" href="#"><img src="{{ asset('images/llg.png') }}"
                            alt="logo" style="width: 100px" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-flex justify-content-end align-items-center"
                        id="navbarSupportedContent">
                        <ul class="footer-navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item p-lg-4">
                                <a class="nav-link text-light {{ Route::is('home') ? 'active' : '' }}"
                                    aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item p-lg-4">
                                <a class="nav-link text-light {{ Route::is('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item dropdown  p-lg-4">
                                <a class="nav-link dropdown-toggle text-light {{ Route::is('product*') ? 'active' : '' }}"
                                    href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('product_category_k3') }}">K3</a>
                                    <a class="dropdown-item" href="{{ route('product_category_regent') }}">Regent</a>
                                </div>
                            </li>
                            <li class="nav-item p-lg-4">
                                <a class="nav-link text-light {{ Route::is('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('banner')
        {{-- <div class="row main-container">
                    <div class="col-md-6 col-lg-6 col-sm-12 main-left">
                        <div class="main-text">
                            <h1 class="text-light">
                                Sergent
                                <br />
                                Vinyl
                                <br />
                                Flooring
                            </h1>
                        </div>
                        <div class="crecile"></div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 main-right">
                        <div class="right-cercile"></div>
                        <div class="right-main-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
                                nisi expedita error ratione sint fuga neque fugiat. Aliquam
                                reprehenderit, molestias ratione. Nulla cum tempora repudiandae
                                iste inventore recusandae ullam aspernatur accusantium dolorum
                                voluptates, sed tempore ad.
                            </p>
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div> --}}
        </div>
    </section>

    @yield('content')
    <div class="footer-section">
        <div class="container py-5">

            <div class="row footer">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="footer-logo">
                        <img src="{{ asset('images/llg.png') }}" alt="logo" style="width: 100px" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <ul class="footer-navbar-nav mb-2 mb-lg-0 d-lg-flex justify-content-center">
                            <li class="nav-item p-lg-4">
                                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item p-lg-4">
                                <a class="nav-link text-light" href="#">About</a>
                            </li>
                            <li class="nav-item p-lg-4">
                                <a class="nav-link text-light" href="#">Product</a>
                            </li>
                            <li class="nav-item p-lg-4">
                                <a class="nav-link text-light" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <nav class="navbar navbar-expand-lg">
            <div class="container-fluid mx-lg-5">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse d-lg-flex justify-content-center align-items-center"
                id="navbarSupportedContent"
              >
                <ul class="footer-navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item p-lg-4">
                    <a
                      class="nav-link active text-light"
                      aria-current="page"
                      href="#"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item p-lg-4">
                    <a class="nav-link text-light" href="#">About</a>
                  </li>
                  <li class="nav-item p-lg-4">
                    <a class="nav-link text-light" href="#">Product</a>
                  </li>
                  <li class="nav-item p-lg-4">
                    <a class="nav-link text-light" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav> --}}
                    <hr />

                    <p class="text-center text-light">
                        ©️ 2023 Regent. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="socail-link">
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-instagram"></i>
                    </div>

                </div>
            </div>

            <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
                class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>



            {{-- </div> --}}
        </div>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var splide = new Splide('.splide', {
                    type: 'loop',
                    padding: '5rem',
                })
                splide.mount()
            })
        </script>
</body>

</html>
