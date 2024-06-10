@section("title", "JUDUL")
@extends("template.main")
@section("body")



        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Cart</h1>
        </div>
        <!-- Single Page Header End -->

       <!-- Cart Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="table-responsive">
            @if($cartItems->isEmpty())
                <div class="text-center">Cart is empty.</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Color</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $item->gambar }}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item->nama }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item->gender }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item->berat }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item->warna }}</p>
                                </td>
                                <td>
                                    <form action="{{ route('cart.destroy', ['id' => $item->id_cart]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        @if(!$cartItems->isEmpty())
    <div class="row g-4 justify-content-end">
            <div class="bg-light rounded">
                <div class="p-4">
                    <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                    
                    @php
                        $subtotal = 0;
                    @endphp
                    
                    @foreach($cartItems as $item)
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="mb-0 me-4">Product: {{ $item->nama }}</h5>
                            <p class="mb-0">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        </div>
                        @php
                            $subtotal += $item->harga;
                        @endphp
                    @endforeach
                    
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="mb-0 me-4">Subtotal:</h5>
                        <p class="mb-0">Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0 me-4">Shipping</h5>
                        <div class="">
                            <p class="mb-0">Flat rate: Rp 30.000,00</p>
                        </div>
                    </div>
                    <p class="mb-0 text-end">Shipping to Indonesia.</p>
                </div>
                
                <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                    <h5 class="mb-0 ps-4 me-4">Total</h5>
                    <p class="mb-0 pe-4">Rp {{ number_format($subtotal + 30000, 0, ',', '.') }}</p>
                </div>
                
                <form action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="submit">Proceed Checkout</button>
                </form>
            </div>
    </div>
@endif

    </div>
</div>
<!-- Cart Page End -->
