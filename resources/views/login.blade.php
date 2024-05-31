@extends('template.main')

@section('title', 'Login')

@section('body')
<!-- Banner 1 -->
<div class="container-fluid hero-header d-flex align-items-center" style="height: 700px;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h1 class="mb-5 display-3 text-primary">Login</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill  mb-3"
                            type="text" placeholder="Username" name="username" value="{{ old('username') }}" required>
                    </div>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill"
                            type="password" placeholder="Password" name="password" required>
                        <button type="submit"
                            class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100"
                            style="top: 0; right: 25%;">Login</button>
                    </div>
                </form>
                <div class="form-check w-75" style="margin: 10px;">
                    <input class="form-check-input" type="checkbox" value="" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">
                        Remember Me
                    </label>
                </div>
                <div style="display: flex;">
                    <h4 class="mb-3 text-secondary" style=" margin-left: 5px;"><a href="{{ url('/register') }}">Create
                            Account</a></h4>
                    <h4 class="mb-3 text-secondary" style=" margin-left: 50px;"><a
                            href="{{ url('/forgotpassword') }}">Forgot Password</a></h4>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
@endsection