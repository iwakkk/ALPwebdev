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
        @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Edit Dog Catalog</h1>
        </div>
        
        <div class="row g-4 align-items-center mb-4">
            <div class="col"> <!-- Adjusted to take 70% width on large screens -->
                <form action="{{ url('editcatalogaction') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <input type="hidden" name="id_anjing" class="form-control" value="{{ $dog_detail->id_anjing }}" id="exampleFormControlInput1" placeholder="HUXXXX">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                        <input type="text" name="jenis"  class="form-control" value="{{ $dog_detail->jenis }}" id="exampleFormControlInput1" placeholder="Jenis Anjing" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama"  class="form-control" value="{{ $dog_detail->nama }}" id="exampleFormControlInput1" placeholder="Nama Anjing" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ $dog_detail->tanggal_lahir }}" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ $dog_detail->warna }}" id="exampleFormControlInput1" placeholder="Warna Anjing" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select class="form-select" name="gender"  aria-label="Default select example" required>
                            <option {{ $dog_detail->gender === 'Male' ? 'selected' : '' }} value="Male">Male</option>
                            <option {{ $dog_detail->gender === 'Female' ? 'selected' : '' }} value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status Jual</label>
                        <select class="form-select" name="status_jual"  aria-label="Default select example" required>
                            <option {{ $dog_detail->status_jual === 'R' ? 'selected' : '' }} value="R">R</option>
                            <option {{ $dog_detail->status_jual === 'S' ? 'selected' : '' }} value="S">S</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Berat</label>
                        <div class="input-group mb-3">
                            <input type="text" name="berat" value="{{ $dog_detail->berat }}"  class="form-control" aria-label="Berat" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="harga" value="{{ $dog_detail->harga }}"  class="form-control" aria-label="Harga" required>
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"  id="exampleFormControlTextarea1" rows="3" required>{{ $dog_detail->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <div id="preview" class="mb-2 d-flex justify-content-center align-items-center overflow-hidden" style="width: 200px; height: 200px;">
                            <img class="img-thumbnail w-100 h-100" src="{{asset($dog_detail->gambar)}}" alt="">
                        </div>
                        <input class="form-control" name="gambar"  type="file" id="formFile">
                    </div>
                    <button class="btn btn-primary float-end" type="submit">Submit</button>
                </form>
            </div>
        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->