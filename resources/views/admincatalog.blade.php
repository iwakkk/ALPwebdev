@section("title", "JUDUL")
@extends("template.mainadmin")
@section("body")


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Catalog</h1>
            
        </div>
        <!-- Single Page Header End -->


       <!-- Fruits Shop Start-->
       <div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Dog Catalog</h1>
        <div class="row g-4 align-items-center mb-4">
            <div class="col-lg-20"> <!-- Adjusted to take 70% width on large screens -->
                <div class="input-group">
                    <input type="search" class="form-control p-3" placeholder="Keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
            <div class="col-lg-5"> <!-- Adjusted to take 30% width on large screens -->
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
                                        <div class="bg-light ps-3 py-3 rounded mb-4">
    <h5 class="mb-3">Default Sorting:</h5>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sortOption" id="latest" value="latest">
        <label class="form-check-label" for="latest">Latest</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sortOption" id="oldest" value="oldest">
        <label class="form-check-label" for="oldest">Oldest</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sortOption" id="highest" value="highest">
        <label class="form-check-label" for="highest">Highest Price</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sortOption" id="lowest" value="lowest">
        <label class="form-check-label" for="lowest">Lowest Price</label>
    </div>
</div>
                                    </div>
                    
                                  
                                   
                                </div>
                            </div>

                            
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">

                                
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="retri" data-category="retrievery">
                                                <img src="img/Dog1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Retriever</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Golden Retriever</h4>
                                                    <p>If you're seeking a loyal, energetic, and loving companion for your family, look no further than the Golden Retriever.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 10 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                              

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="hus" data-category="huskyy">
                                                <img src="img/Dog2.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Husky</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Siberian Husky</h4>
                                                <p>Look no further than the Siberian Husky! Stunning dogs, known for their thick fur, piercing eyes, energetic spirit, Loyal and friendly</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 21 Juta</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="pit" data-category="pitbully">
                                                <img src="img/Dog3.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Pitbull</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>American Pug</h4>
                                                    <p>If you're looking for a loving, low-maintenance companion with a dash of humor, the Pug might be your perfect match.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 8 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="retri" data-category="retrievery">
                                                <img src="img/Corgi1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Corgi" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Corgi</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Pembroke Corgi Welsh</h4>
                                                    <p>These adorable short-legged, known for their fluffy and big personalities, will win you over with their, loyalty, and playful spirit.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 28.8 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="retri" data-category="retrievery">
                                                <img src="img/Golden1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Retriever</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Labrador Retriever</h4>
                                                <p>These friendly and intelligent dogs, known for their playful spirit and eagerness to please, ranked as one of the most popular breeds in the world.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 9.8 Juta</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="hus" data-category="huskyy">
                                                <img src="img/Husky1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Husky</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Alaskan Malamute</h4>
                                                <p>These magnificent, double-coated giants were originally bred for hauling heavy loads across vast Alaskan terrain. Known for their strength, endurance, and independent spirit.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp. 40 Juta</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="cor" data-category="corgy">
                                                <img src="img/Corgi2.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Corgi</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Welsh Corgi Cardigan</h4>
                                                    <p>known for their intelligence, loyalty, and independent spirit. While playful and affectionate with their families, Cardigans can be wary of strangers.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 29.2 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="pit" data-category="pitbully">
                                                <img src="img/Pitbull.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Pitbull</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>American Bully</h4>
                                                    <p>These powerful and visually impressive dogs were developed in the United States for companionship and athleticism. the American Bully can be a loyal and rewarding companion.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 17 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="pit" data-category="pitbully">
                                                <img src="img/Dog3.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div id = "Retriever" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Pitbull</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>American Pug</h4>
                                                    <p>If you're looking for a loving, low-maintenance companion with a dash of humor, the Pug might be your perfect match.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp. 8 Juta</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
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