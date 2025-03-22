<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>velux watch Ecommerce</title>
    <link href="assets/css/theme.css" rel="stylesheet" />
    <style>
        /* Card styling */
        .card {
            width: 100%;
            margin: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: transparent;
            /* Set background to transparent */
        }

        .card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 1.25rem;
        }

        .card-text {
            font-size: 1rem;
        }

        .btn-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        /* Responsive layout */
        @media (max-width: 768px) {
            .card {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
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
    <div class="container mt-10 ">
        <div class="d-flex justify-content-between align-items-center mb-3" style="margin: 20px;">
        </div>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row flex-wrap">
            @foreach($watches as $watch)
            <div class="col-md-3 col-sm-6 mb-4 d-flex">
                <div class="card">
                    <img src="{{ $watch->image ? asset($watch->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}" alt="Watch Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $watch->name }}</h5>
                        <div class="price-container" style="display: flex; align-items: center; justify-content: center;">
                            <p class="card-text" style="text-decoration: line-through; color: #999; font-size: 0.9rem; margin-right: 5px;">349 DH</p>
                            <p class="card-text" style="font-size: 1rem; padding-bottom: 18px;">{{ number_format($watch->price, 2) }} DH</p>
                        </div>
                        <div class="btn-actions">
                            <a href="{{ route('watches.show', $watch->id) }}" class="btn btn-primary btn-sm">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>