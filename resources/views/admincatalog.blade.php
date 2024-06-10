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
        @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Dog Catalog</h1>   
            <a class="btn btn-secondary text-white fs-5 p-2" href="{{ url('catalog-create') }}">Add Dog</a>
        </div>
        
        <div class="row g-4 align-items-center mb-4">
            <div class="col-lg-12"> <!-- Adjusted to take 70% width on large screens -->
                <form action="{{ url('searchcatalog') }}" method="POST">
                    <div class="input-group">
                        {{ csrf_field() }}
                        <input type="search" name="keyword" value="{{ session()->has('keyword') ? session()->get('keyword') : '' }}" id="search-bar" class="form-control p-3" placeholder="Keywords" aria-describedby="search-icon-1">
                        <button id="search-button" type="submit" class="btn btn-secondary input-group-text p-3"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5"> <!-- Adjusted to take 30% width on large screens -->
            </div>
        </div>
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4 justify-content-center">
                                    @foreach ($dogs as $dog)
                                    <div class="col-sm col-md-3 col-lg-3 col-xl-4">
                                        <div class="rounded d-flex flex-column position-relative fruite-item">
                                                <img src="{{asset($dog->gambar)}}" width="100%" height="40%" class="rounded-top object-fit-cover" alt="">
                                                <div id = "Corgi" class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $dog->jenis }}</div>
                                                <div class="p-4 d-flex flex-column w-100 h-100 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $dog->nama }}</h4>
                                                    <p>{{ $dog->deskripsi }}</p>
                                                    <p>Wight : {{ $dog->berat }}</p>
                                                    <p>Birth : {{ $dog->tanggal_lahir }}</p>
                                                    <p>Color : {{ $dog->warna }}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">{{ 'Rp '.number_format($dog->harga, 2, ',', '.') }}</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                                        <a href="{{ url('editcatalog/'.$dog->id_anjing) }}" class="btn border border-secondary rounded-pill px-3 text-primary"> <i class="bi bi-pencil me-2 text-primary"></i> Edit</a>
                                                        <form class="d-flex align-items-center mt-3" action="{{ url('deletecatalog') }}" method="POST">
                                                            @csrf
                                                            @method('DELETE') 
                                                            <input type="hidden" name="id" value="{{ $dog->id_anjing }}"> <!-- Assuming $catalog is the variable holding the record -->
                                                            <button type="submit" class="btn border border-danger rounded-pill px-3 text-danger"><i class="bi bi-trash me-2 text-danger"></i> Delete</button>
                                                        </form>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
  

                                    
                                </div>
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
                                                <a href="{{ $dogs->url($i) }}" class="{{ $i === $dogs->currentPage() ? 'active' : '' }} rounded">{{ $i }}</a>
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