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
                <div class="row g-4 mb-5">
                    <form action="{{ route('shop.search') }}" method="GET" class="input-group w-100 mx-auto d-flex">
                        <input type="search" name="keyword" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <button type="submit" id="search-icon-1" class="input-group-text p-3"><i
                                class="fa fa-search"></i></button>
                    </form>
                </div>


                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="mb-3">
                                <h4>Categories</h4>
                                <ul class="list-unstyled fruite-categorie">
                                    @foreach ($categories as $category)
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="{{ route('shop', ['category' => $category->jenis]) }}"><i
                                                        class="filter-btn"
                                                        data-category="{{ $category->jenis }}"></i>{{ $category->jenis }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col-lg-12">
</div>


                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            @foreach ($dogs as $dog)
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative">
                                        <div class="heart-icon position-absolute top-0 end-0 mt-2 me-2">
                                            <form action="{{ route('addWishlist', ['id_anjing' => $dog->id_anjing]) }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="dog_id" value="{{ $dog->id_anjing }}">
                                                <button type="submit" class="btn rounded-circle"><i
                                                        class="bi bi-heart-fill"></i></button>
                                            </form>
                                        </div>

                                        <div class="retri" data-category="retrievery"
                                            style="height: 200px; overflow: hidden;">
                                            <img src="{{asset($dog->gambar)}}"
                                                class="img-fluid w-100 h-100 object-fit-cover rounded-top" alt="">
                                        </div>
                                        <div id="Retriever"
                                            class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">{{$dog->jenis}}</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom"
                                            style="height: 300px">
                                            <h4>{{$dog->nama}}</h4>
                                            <p>{{$dog->deskripsi}}</p>
                                            <div
                                                style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); text-align: center; width: 100%;">
                                                <p class="text-dark fs-5 fw-bold mb-0">Rp
                                                    {{ number_format($dog->harga, 0, ',', '.') }}
                                                </p>
                                                <div>
                                                    <a href="{{ route('shop.detail', ['id' => $dog->id_anjing]) }}"
                                                        class="btn border border-secondary rounded-pill px-3 text-primary">
                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Dog
                                                        Details
                                                    </a>
                                                    @if (Session::has('id_account') || isset($_COOKIE['id_account']))
                                                        <form action="{{ route('cart.add') }}" method="POST"
                                                            style="display: inline;">
                                                            @csrf
                                                            <input type="hidden" name="id_anjing" value="{{ $dog->id_anjing }}">
                                                            <button type="submit"
                                                                class="btn border border-secondary rounded-pill px-3 text-primary">
                                                                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add
                                                                to cart
                                                            </button>
                                                        </form>
                                                    @else
                                                        <a href="{{ route('login') }}"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary">
                                                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                            cart
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination links -->
                        <div class="row">
                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    @if ($dogs->onFirstPage())
                                        <a class="rounded disabled">&laquo;</a>
                                    @else
                                        <a href="{{ $dogs->previousPageUrl() }}" class="rounded">&laquo;</a>
                                    @endif

                                    <!-- Pagination Elements -->
                                    @for ($i = 1; $i <= $dogs->lastPage(); $i++)
                                        <a href="{{ $dogs->url($i) }}"
                                            class="{{ $i === $dogs->currentPage() ? 'active' : '' }} rounded">{{ $i }}</a>
                                    @endfor

                                    <!-- Next Page Link -->
                                    @if ($dogs->hasMorePages())
                                        <a href="{{ $dogs->nextPageUrl() }}" class="rounded">&raquo;</a>
                                    @else
                                        <a class="rounded disabled">&raquo;</a>
                                    @endif
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
@endsection