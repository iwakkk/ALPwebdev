@section("title", "JUDUL")
@extends("template.main")
@section("body")

<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header d-flex justify-content-center align-items-center"
    style="height: 600px;">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-3 text-secondary">We Sell The Best</h4>
                <h1 class="mb-5 display-3 text-primary">Certified & Healthy Dog</h1>
                <div class="position-relative">
                    <a href="{{ url('/shop') }}">
                        <button type="button"
                            class="btn btn-primary border-2 border-secondary py-3 px-4 rounded-pill text-white">
                            Shop Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero End -->


<!-- Trending Dog Start-->
<div class="container-fluid vesitable">
    <div class="container py-5">
        <h1 style="font-size: 3rem; font-weight: bold; padding: 20px 0; margin-bottom: 20px; color: #2c3e50; text-align: center; background: linear-gradient(90deg, rgba(255, 215, 0, 1) 0%, rgba(255, 99, 71, 1) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Our Picks For You
        </h1>
        <div class="row g-4">

            @foreach ($trendingDogs as $dog)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative fruite-item">
                        <div class="Retriever">
                            <img src="{{ $dog->gambar }}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div id="Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                            style="top: 10px; right: 10px;">{{ $dog->jenis }}</div>
                        <div class="p-4 border border-secondary border-top-0 rounded-bottom"
                            style="height: 350px">
                            <h4>{{ $dog->nama }}</h4>
                            <h4>{{ $dog->jenis }}</h4>
                            <p>{{ $dog->deskripsi }}</p>
                            <div
                                style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); text-align: center; width: 400px">
                                <p class="text-dark fs-5 fw-bold mb-0">Rp
                                    {{ number_format($dog->harga, 0, ',', '.') }},00
                                </p>
                                <div>
                                    <a href="{{ route('shop.detail', ['id' => $dog->id_anjing]) }}"
                                        class="btn border border-secondary rounded-pill px-3 text-primary">
                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Dog Details
                                    </a>
                                    @if (Session::has('id_account') || isset($_COOKIE['id_account']))
                                        <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="id_anjing" value="{{ $dog->id_anjing }}">
                                            <button type="submit"
                                                class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="btn border border-secondary rounded-pill px-3 text-primary">
                                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Trending Dog End -->

    

<!-- Dog Shop Start-->
<div class="container-fluid fruite">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4 mb-3">
                <h1>Ready to be your loyal partner</h1>
            </div>

            <div class="tab-content">
                <div id="All-Breed" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($dogs as $dog)
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative">
                                <div class="retri" data-category="retrievery"
                                            style="height: 200px; overflow: hidden;">
                                            <img src="{{asset($dog->gambar)}}"
                                                class="img-fluid w-100 h-100 object-fit-cover rounded-top" alt="">
                                        </div>
                                    <div id="Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; right: 10px;">{{$dog->jenis}}</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom"
                                        style="height: 350px">
                                        <h4>{{$dog->nama}}</h4>
                                        <h4>{{$dog->jenis}}</h4>
                                        <p>{{$dog->deskripsi}}</p>
                                        <div
                                            style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); text-align: center; width: 400px">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp
                                                {{ number_format($dog->harga, 0, ',', '.') }},00
                                            </p>
                                            <div>
                                                <a href="{{ route('shop.detail', ['id' => $dog->id_anjing]) }}"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary">
                                                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Dog Details
                                                </a> <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Pagination links -->
            <!-- <div class="pagination d-flex justify-content-center mt-5" style="width;"> -->
            <div class="position-relative mt-5">
                <a href="{{ url('/shop') }}">
                    <button type="button"
                        class="btn btn-primary border-2 border-secondary py-3 px-4 rounded-pill text-white">
                        More
                    </button>
                </a>
            </div>




        </div>
    </div>
    </div>
    <!-- Dog Shop End-->

    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Help You Choosing the Best and Healthy Dog</h1>
                        <p class="fw-normal display-3 text-dark mb-4">Only at Asuku</p>
                        <p class="mb-4 text-dark">Finding the right dog is an exciting journey! But with so many breeds
                            and
                            factors to consider, it can also feel overwhelming. At Asuku, we're here to guide you every
                            step
                            of the way to ensure you find the perfect canine companion who complements your lifestyle
                            and
                            brings joy into your life.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/TestimonialDogs.png" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute"
                            style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 40px;">Woof</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->



   


    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Our Testimonial</h4>
                <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's
                                standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's
                                standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's
                                standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pet Friendly Shipping</h5>
                            <p class="mb-0">We use special kennels and well-ventilated vehicles to ensure your dog
                                remains
                                comfortable during the journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <svg class="w-6 h-6 text-gray-800 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                            </svg>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Best Pet E-Commerce</h5>
                            <p class="mb-0">We are proud of our commitment to providing a safe, convenient and
                                informative
                                shopping experience for dog lovers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <svg class="w-[48px] h-[48px] text-gray-800 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
                            </svg>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Competitive Price</h5>
                            <p class="mb-0">Find your perfect furry friend without breaking the bank. We monitor market
                                prices to ensure you get a fair deal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>24/7 Support</h5>
                            <p class="mb-0">With our helpful customer service, you can rest assured that you will never
                                be
                                alone when you get a new pet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Featurs Section End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


