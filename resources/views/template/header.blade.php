<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Asuku - Ecommerce for pets!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <style>
        body {
            background-color: rgb(243, 255, 230);
        }
    </style>

</head>

<header>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="topbar bg-primary d-none d-lg-block w-100">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white">Cornell Apartment, CitraLand, Made, Sambikerep, Surabaya</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white">Asuku@Gmail.com</a></small>
                </div>
                @if ((Session::has('id_account') || isset($_COOKIE['id_account'])) && Session::get('role') === 'Admin')
                <div class="top-link pe-2">
                    <a href="{{ url('/admincatalog') }}" class="text-white"><small class="text-white ms-2">Admin
                            Login</small></a>
                </div>
                @endif
            </div>
        </div>
        <div class="px-5">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="text-primary display-6">Asuku</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                @if (Session::has('id_account') || isset($_COOKIE['id_account']))
                    <div style="font-weight: bold; font-size: 20px;">Hello,
                        <span>{{ Session::get('username') ?? Cookie::get('username')}}</span></div>
                @endif
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}"
                            style="font-weight: bold; font-size: 18px;">Home</a>
                        <a href="{{ url('/shop') }}"
                            class="nav-item nav-link {{ request()->is('shop') ? 'active' : '' }}"
                            style="font-weight: bold; font-size: 18px;">Shop</a>
                            @if (Session::has('id_account') || isset($_COOKIE['id_account']))
                        <a href="{{ url('/cart') }}"
                            class="nav-item nav-link {{ request()->is('cart') ? 'active' : '' }}"
                            style="font-weight: bold; font-size: 18px;">Cart</a>
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('') ? 'active' : '' }}"
                            style="font-weight: bold; font-size: 18px;">Transaction List</a>
                            @endif
                        <a href="{{ url('/contact') }}"
                            class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            style="font-weight: bold; font-size: 18px;">Contact</a>
                    </div>

                    <div class="d-flex m-3 me-0">
                        <!-- logo search -->
                        <button
                            class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                class="fas fa-search text-primary"></i></button>
                        @if (Session::has('id_account') || isset($_COOKIE['id_account']))
                            <a href="{{ url('/wishlist') }}" class="position-relative me-4 my-auto">
                                <i class="bi bi-heart-fill fa-2x text-danger"></i>
                            </a>
                            <!-- logo cart -->
                            <a href="{{ url('/cart') }}" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span
                                    class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                    style="top: -5px; left: 15px; height: 20px; min-width: 20px;">0</span>
                            </a>
                        @endif
                        <!-- logo user -->
                        @if (Session::has('id_account') || isset($_COOKIE['id_account']))
    <!-- If user is logged in -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-2x user-icon"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
@else
    <!-- If user is not logged in -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-2x"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
        </li>
    </ul>
@endif

                    </div>
                </div>
            </nav>

            <!-- Navbar End -->


</header>
<!-- Modal Search  -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
