<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $watch->name }} - VeloxTime Ecommerce</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link href="/assets/css/theme.css" rel="stylesheet" />


    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">

</head>

<body>
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="/"><span class="text-light fs-2 fw-bold ms-2"><img src="/assets/img/gallery/logo_watches_page-0001-removebg-preview.png" alt="" style="width: 15%;"></span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="#collections">WATCHES</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-bold" href="{{route('watches.index')}}">STORE</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-bold" href="#contact">CONTACT</a></li>
                    </ul>
                    <form class="d-flex">
                        <a class="text-primary" href="#!">
                            <svg style="margin-top: 10px;" class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg></a>
                        <div class="ms-4 text-light fw-bold" style="margin-top: 10px;">1 (800) 862 6772 </div>
                        @if(Auth::check())
                        <li class="nav-item px-5 nav-link fw-bold">
                            <span>bonjour</span>
                            <a class="nav-link fw-bold" href="" style="color: white; display: inline; margin-top: 10px;">{{ Auth::user()->name }}</a>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Logout</button>
                            </form>
                        </li>
                        @else
                        <div class="ms-4 text-light fw-bold">
                            <button type="button" class="btn btn-sm btn-outline-primary " style="margin-bottom: 10px; color: white;"><a href="{{route('register')}}">register</a></button>
                            <button type="button" class="btn btn-primary " style="margin-bottom: 10px; height:39px;"> <a href="{{route('login')}}">login</a></button>
                        </div>
                        @endif

                    </form>
                </div>
            </div>
        </nav>
        <section class="py-1" id="header">
            <div class="bg-holder"
                style=" background-position:right top;background-size:contain;">

            </div>
            <div class="container">
                <div class="row align-items-center" style="padding-top: 200px; padding-bottom: 20px;">

                    <div class="col-md-8 col-lg-6 text-md-start text-center">
                        <h1 class="display-4 lh-sm text-uppercase text-light align-items-center">{{ $watch->name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $watch->image ? asset($watch->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}" alt="{{ $watch->name }}" style="padding-left: 120px;" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $watch->image ? asset($watch->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}" alt="{{ $watch->name }}" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $watch->image ? asset($watch->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}" alt="{{ $watch->name }}" class="img-fluid">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Price: {{ number_format($watch->price, 2) }} DH</h2>
                    <p>{{ $watch->description }}</p>

                    <form action="{{ route('orders.store') }}" method="POST">

                        @csrf
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Nom et Prenom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="saisissez Votre Nom et Prenom " required>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="N° de telephone" required>
                        </div>
                        <div class="mb-3">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" class="form-control" id="ville" name="city" placeholder="Ville" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <section class="py-0 pt-7" id="contact" style="padding-top: 40px;">

                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-sm-4 col-xl-3 mb-3">
                                <h4 class="lh-lg fw-bold text-light">WATCH</h4>
                            </div>
                            <div class="col-6 col-sm-4 col-xl-3 mb-3">
                                <h5 class="lh-lg fw-bold text-light">MENU</h5>
                                <ul class="list-unstyled mb-md-4 mb-lg-0">
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Shipping Info</a></li>
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Refunds</a></li>
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">How to Order</a></li>
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">How to Track</a></li>
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Size Guides</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-4 col-xl-3 mb-3">
                                <h5 class="mb-5"></h5>
                                <ul class="list-unstyled mb-md-4 mb-lg-0">
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Contact Us</a></li>
                                    <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">my account</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-xl-3">
                                <h5 class="lh-lg fw-bold text-light text-uppercase">Signup For our Latest News</h5>
                                <div class="row input-group-icon mb-5">
                                    <div class="col-12">
                                        <form class="row row-cols-lg-auto g-0 align-items-center">
                                            <div class="col-8 col-lg-9">
                                                <label class="visually-hidden" for="colFormLabel">Username</label>
                                                <div class="input-group">
                                                    <input class="rounded-end-0 form-control" id="colFormLabel" type="email" placeholder="email address" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <button class="btn btn-primary rounded-start-0" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-700"></div>


                        <div class="row flex-center my-3">

                            <div class="col-md-6">
                                <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- end of .container-->
                </section>
    </main>
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>