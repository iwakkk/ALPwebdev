@section("title", "JUDUL")
@extends("template.main")
@section("body")

<!-- Banner 1 -->
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h1 class="mb-5 display-3 text-primary">Change Password</h1>
                <div class="position-relative mx-auto">
                <form action="{{ route('changepassword') }}" method="POST">
                        @csrf
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="password" placeholder="New Password" style="margin-bottom: 10px;" name="new_password">
                        <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="password" placeholder="Confirm Password" name="confirm_password">
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Change Password</button>
                        </div>
                    </form>
                </div>
                <h4 class="mb-3 text-secondary" style="margin-top: 10px; margin-left: 5px;"><a href="{{ url('/login') }}">Already Remember Your Password?</a></h4>
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
