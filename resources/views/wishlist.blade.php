@section("title", "JUDUL")
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
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative fruite-item">
                        <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                            <!-- Heart icon button -->
                            <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                        </div>
                        <div class="retri" data-category="retrievery">
                            <img src="img/Dog1.png" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Retriever</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Golden Retriever</h4>
                                <p>If you're seeking a loyal, energetic, and loving companion for your family, look no further than the Golden Retriever.</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 10 Juta</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->