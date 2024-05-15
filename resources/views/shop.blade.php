<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Asuku - Ecommerce for pets! </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">

        <style>
            /* Style for the heart icon button */
            .heart-icon button {
                border: none;
                background-color: transparent;
                cursor: pointer;
            }
    
            /* Style for the heart icon */
            .heart-icon i {
                font-size: 24px;
                color: white; /* Default color */
                transition: color 0.3s ease; /* Smooth color transition */
            }
    
            /* Style for the heart icon when active (clicked) */
            .heart-icon .active i {
                color: red; /* Change color when active */
            }
        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Cornell Apartment, CitraLand, Made, Sambikerep, Surabaya</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Asuku@Gmail.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6">Asuku</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                            <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ url('/shop') }}" class="nav-item nav-link active">Shop</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="{{ url('/cart') }}" class="dropdown-item">Cart</a>
                                </div>
                            </div>
                            <a href="{{ url('/contact') }}"class="nav-item nav-link">Contact</a>
                        </div>  
                        <div class="d-flex m-3 me-0">
                            <!-- logo search -->
                            <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            <a href="{{ url('/wishlist') }}" class="position-relative me-4 my-auto">
                                <i class="bi bi-heart-fill fa-2x text-danger"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                            </a>
                            <!-- logo cart -->
                            <a href="{{ url('/cart') }}" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">0</span>
                            </a>
                            <!-- logo user -->
                            <a href="{{ url('/login') }}" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


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
                              

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="hus" data-category="huskyy">
                                                <img src="img/Dog2.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Husky</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Siberian Husky</h4>
                                                <p>Look no further than the Siberian Husky! Stunning dogs, known for their thick fur, piercing eyes, energetic spirit, Loyal and friendly</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 21 Juta</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="pit" data-category="pitbully">
                                                <img src="img/Dog3.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Pitbull</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>American Pug</h4>
                                                    <p>If you're looking for a loving, low-maintenance companion with a dash of humor, the Pug might be your perfect match.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 8 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="retri" data-category="retrievery">
                                                <img src="img/Corgi1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Corgi" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Corgi</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Pembroke Corgi Welsh</h4>
                                                    <p>These adorable short-legged, known for their fluffy and big personalities, will win you over with their, loyalty, and playful spirit.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 28.8 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="retri" data-category="retrievery">
                                                <img src="img/Golden1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Retriever</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Labrador Retriever</h4>
                                                <p>These friendly and intelligent dogs, known for their playful spirit and eagerness to please, ranked as one of the most popular breeds in the world.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 9.8 Juta</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="hus" data-category="huskyy">
                                                <img src="img/Husky1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Husky</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Alaskan Malamute</h4>
                                                <p>These magnificent, double-coated giants were originally bred for hauling heavy loads across vast Alaskan terrain. Known for their strength, endurance, and independent spirit.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 40 Juta</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="cor" data-category="corgy">
                                                <img src="img/Corgi2.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Corgi</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Welsh Corgi Cardigan</h4>
                                                    <p>known for their intelligence, loyalty, and independent spirit. While playful and affectionate with their families, Cardigans can be wary of strangers.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 29.2 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="pit" data-category="pitbully">
                                                <img src="img/Pitbull.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Pitbull</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>American Bully</h4>
                                                    <p>These powerful and visually impressive dogs were developed in the United States for companionship and athleticism. the American Bully can be a loyal and rewarding companion.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 17 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                                <!-- Heart icon button -->
                                                <button class="btn rounded-circle" onclick="toggleHeart(this)"><i class="bi bi-heart-fill"></i></button>
                                            </div>
                                            <div class="pit" data-category="pitbully">
                                                <img src="img/Dog3.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Pitbull</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>American Pug</h4>
                                                    <p>If you're looking for a loving, low-maintenance companion with a dash of humor, the Pug might be your perfect match.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 8 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

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


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Asuku</h1>
                                <p class="text-secondary mb-0">Certified and Healthy Dogs</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">Were the pioneer of Dog E-Commerce, with our vision is to finding the best partners of your life. Happy customer are first priority</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                            <a class="btn-link" href="">Return Policy</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: Cornell Apartment, CitraLand, Made, Sambikerep, Surabaya</p>
                            <p>Email: Asukue@gmail.com</p>
                            <p>Phone: +62 889-6969-6669</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Asuku</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
        // Function to toggle the active class and change color
        function toggleHeart(btn) {
            btn.classList.toggle('active');
        }
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

    <script>
        // Add event listener to filter buttons
        const filterButtons = document.querySelectorAll('.filter-btn');
        const products = document.querySelectorAll('.product');
    
        filterButtons.forEach(button => {
          button.addEventListener('click', () => {
            const selectedCategory = button.dataset.category;
    
            products.forEach(product => {
              const productCategory = product.dataset.category;
              if (selectedCategory === 'all' || selectedCategory === productCategory) {
                product.style.display = 'block';
              } else {
                product.style.display = 'none';
              }
            });
          });
        });
      </script>

</html>