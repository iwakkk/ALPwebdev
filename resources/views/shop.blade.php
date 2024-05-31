@section("title", "JUDUL")
@extends("template.main")
@section("body")


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Shop</h1>
            
        </div>
        <!-- Single Page Header End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mb-4">Dog Shop</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                    <label for="Doggy">Default Sorting:</label>
                                    <select id="Doggy" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                        <option value="volvo">-</option>
                                        <option value="saab">Popularity</option>
                                        <option value="opel">Playful</option>
                                        <option value="audi">Energetic</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Categories</h4>
                                            <ul class="list-unstyled fruite-categorie">
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#hus"><i class="filter-btn" data-category="huskyy"></i>Husky</a>
                                                        <span>(4)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#cor"><i class="filter-btn" data-category="corgy"></i>Corgi</a>
                                                        <span>(2)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#retri"><i class="filter-btn" data-category="retrievery"></i>Retriever</a>
                                                        <span>(3)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a a href="#pit"><i class="filter-btn" data-category="pitbully"></i>Pitbull</a>
                                                        <span>(2)</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                       
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Additional</h4>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                                <label for="Categories-1"> Organic</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                                <label for="Categories-2"> Fresh</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                                <label for="Categories-3"> Sales</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                                <label for="Categories-4"> Discount</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="Beverages">
                                                <label for="Categories-5"> Expired</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="mb-3">Flash Sale !</h4>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="img/Flash1.png" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">American Pitbull</h6>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">Rp. 5 Juta</h5>
                                                    <h5 class="text-danger text-decoration-line-through">Rp. 9 Juta</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="img/Flash2.png" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Asian Beagle</h6>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">Rp. 3.4 Juta</h5>
                                                    <h5 class="text-danger text-decoration-line-through">Rp. 6 Juta</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="img/Flash3.png" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Pembroke Corgi</h6>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">Rp. 6.6 Juta</h5>
                                                    <h5 class="text-danger text-decoration-line-through">Rp. 9 Juta</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center my-4">
                                            <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">View More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                                <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">

                                @foreach ($dogs as $dog)
                                    <div class="col-md-6 col-lg-6 col-xl-4" >
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="retri" data-category="retrievery">
                                                <img src="{{$dog->gambar}}" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{$dog->jenis}}</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom" style="height: 300px">
                                                    <h4>{{$dog->nama}}</h4>
                                                    <p>{{$dog->deskripsi}}</p>
                                                    <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); text-align: center; width: 400px">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp
                                                {{ number_format($dog->harga, 0, ',', '.') }},00
                                            </p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                   

                                    <div class="col-12">
                                        <div class="pagination d-flex justify-content-center mt-5">
                                            <a href="#" class="rounded">&laquo;</a>
                                            <a href="#" class="active rounded">1</a>
                                            <a href="#" class="rounded">2</a>
                                            <a href="#" class="rounded">3</a>
                                            <a href="#" class="rounded">4</a>
                                            <a href="#" class="rounded">5</a>
                                            <a href="#" class="rounded">6</a>
                                            <a href="#" class="rounded">&raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->