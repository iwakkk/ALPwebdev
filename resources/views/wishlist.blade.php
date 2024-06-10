@section("title", "Wishlist")
@extends("template.main")
@section("body")

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Wishlist</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Wishlist</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    @if(isset($wishlistItems) && count($wishlistItems) > 0)
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-4 justify-content-center">
                    @foreach ($wishlistItems as $wishlist)
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="rounded position-relative fruite-item">
                                <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                    <!-- Heart icon button -->
                                    <form action="{{ route('wishlist.destroy', ['id_anjing' => $wishlist->id_anjing]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $wishlist->id_anjing }}">
                                        <button type="submit" class="btn rounded-circle"><i class="bi bi-heart-fill"></i></button>
                                    </form>



                                    </div>
                                <div class="retri" data-category="retrievery">
                                    <img src="{{ $wishlist->gambar }}" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div id="Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $wishlist->jenis }}</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>{{ $wishlist->nama }}</h4>
                                    <p>{{ $wishlist->deskripsi }}</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">Rp {{ number_format($wishlist->harga, 0, ',', '.') }}</p>
                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
    <section class="cart_area">
    <div class="container">
        <div class="cart_inner" style=" display: flex; flex-direction: column; justify-content: center; align-items: center; height: 30vh;">
            <h1>Wishlist is Empty</h1>
            <br>
        </div>
    </div>
</section>

    @endif
    <!-- Cart Page End -->

@endsection
