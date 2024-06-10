@section("title", "JUDUL")
@extends("template.main")
@section("body")

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5 bg-primary">
    <div class="container text-center">
        <a href="{{ url('/shop') }}" class="btn btn-light btn-lg"><i class="fa fa-arrow-left me-2"></i> Back to Shop</a>
        <h1 class="text-white mt-3 mb-0">{{ $dog->nama }}</h1>
    </div>
</div>
<!-- Single Page Header End -->

<!-- Single Product Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="border rounded">
                    <img src="{{ asset($dog->gambar) }}" class="img-fluid w-100 rounded-top" alt="{{ $dog->nama }}">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3" style="font-size: 2.5rem;">{{ $dog->nama }}</h1>
                <p class="mb-3" style="font-size: 1.6rem;">Category: {{ $dog->jenis }}</p>
                <h1 class="fw-bold mb-3">Rp {{ number_format($dog->harga, 0, ',', '.') }},00</h1>
                <p class="mb-4" style="font-size: 1.2rem;">{{ $dog->deskripsi }}</p>

                @if (Session::has('id_account') || isset($_COOKIE['id_account']))
                    <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="id_anjing" value="{{ $dog->id_anjing }}">
                        <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn border border-secondary rounded-pill px-3 text-primary">
                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                    </a>
                @endif

            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-about" role="tabpanel"
                                aria-labelledby="nav-about-tab">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="bg-white rounded shadow-sm p-4">
                                            <p class="fs-5"><strong>Weight:</strong> {{ $dog->berat }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white rounded shadow-sm p-4">
                                            <p class="fs-5"><strong>Color:</strong> {{ $dog->warna }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white rounded shadow-sm p-4">
                                            <p class="fs-5"><strong>Age:</strong> {{ $dog->age }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white rounded shadow-sm p-4">
                                            <p class="fs-5"><strong>Gender:</strong> {{ $dog->gender }}</p>
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
<!-- Single Product End -->

@endsection