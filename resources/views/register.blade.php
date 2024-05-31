@section("title", "JUDUL")
@extends("template.main")
@section("body")


<!-- Banner 1 -->
<div class="container-fluid py-5 hero-header">
    <!-- Success message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Error message -->
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container py-5">
        @include("Template.alert")
        <div class="row g-5 align-items-center">
            <h1 class="display-3 text-primary">Register</h1>
            <form action="/registerrequest" method="POST">                
            @csrf
                <div class="row">
                    <div class="col-lg-6">
                    <input class="form-control border-2 border-secondary py-4 px-4 rounded-pill" type="text"
                            placeholder="Full Name" name="nama" value="{{ old('nama') }}" required style="color: black">

                        <input class="form-control border-2 border-secondary py-4 px-4 rounded-pill mt-4" type="text"
                            placeholder="Alamat" name="alamat" value="{{ old('alamat') }}" required style="color: black">

                        <input class="form-control border-2 border-secondary py-4 px-4 rounded-pill mt-4" type="date"
                            placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required style="color: black">

                        <input class="form-control border-2 border-secondary py-4 px-4 rounded-pill mt-4" type="tel"
                            placeholder="Nomor Telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required style="color: black">
                    </div>
                    <div class="col-md-6">
                    <input class="form-control border-2 border-secondary py-4 px-4 rounded-pill" type="email"
                            placeholder="Email" name="email" value="{{ old('email') }}" required style="color: black">

                        <input id="username" class="form-control border-2 border-secondary py-4 px-4 rounded-pill mt-4"
                            type="text" placeholder="Username" name="username" value="{{ old('username') }}" required style="color: black">
                        <div class="position-relative mx-auto">
                            <input id="password" class="form-control border-2 border-secondary py-4 px-4 rounded-pill mt-4"
                                type="password" placeholder="Create Password" name="password" required style="color: black">
                        <div class="position-relative mx-auto">
                        <input id="password_confirm" class="form-control border-2 border-secondary py-4 px-4 rounded-pill mt-4"
                                type="password" placeholder="Confirm Password" name="password_confirmation" required style="color: black">
                            <button type="submit"
                                class="btn btn-primary border-2 border-secondary position-absolute rounded-pill text-white h-100"
                                style="top: 0; right: 0%;">Create Account</button>
                        </div>
                    </div>
                </div>
                
            </form>
            <h4 class="mb-3 text-secondary" style="margin-top: 10px; margin-left: 5px;"><a
                    href="{{ url('/login') }}">Already Have An Account?</a></h4>
        </div>
        <div class="col-md-12 col-lg-5">
            <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- Isi carousel jika diperlukan -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero End -->

