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
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Create Dog Catalog</h1>
        </div>

        @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif
        
        <div class="row g-4 align-items-center mb-4">
            <div class="col"> <!-- Adjusted to take 70% width on large screens -->
                <form action="{{ url('createcatalogaction') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                        <input type="text" name="jenis"  class="form-control" id="exampleFormControlInput1" placeholder="Jenis Anjing" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama"  class="form-control" id="exampleFormControlInput1" placeholder="Nama Anjing" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"  class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Warna</label>
                        <input type="text" name="warna" class="form-control" id="exampleFormControlInput1" placeholder="Warna Anjing" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select class="form-select" name="gender"  aria-label="Default select example" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status Jual</label>
                        <select class="form-select" name="status_jual"  aria-label="Default select example" required>
                            <option value="R">R</option>
                            <option value="S">S</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Berat</label>
                        <div class="input-group mb-3">
                            <input type="number" name="berat"  class="form-control" aria-label="Berat" required>
                            <span class="input-group-text">KG</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="harga"  class="form-control" aria-label="Harga" required> 
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"  id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" name="gambar"  type="file" id="formFile" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->