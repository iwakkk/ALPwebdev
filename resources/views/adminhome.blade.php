@section("title", "JUDUL")
@extends("template.mainadmin")
@section("body")



        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Admin</h1>
        </div>
        <!-- Single Page Header End -->

<!-- Main Content Start -->
<div class="container pt-5">
    <div class="row justify-content-center">
        <!-- Sales Card -->
        <div class="col-lg-4 mb-4">
            <div class="card bg-white text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-shopping-cart fa-3x text-success mb-3"></i>
                    <h5 class="card-title mb-3">Total Sales</h5>
                    <h2 class="card-text display-3">145</h2>
                    <p class="card-text">Revenue Today: $3500</p>
                    <a href="#" class="btn btn-outline-success">View Details</a>
                </div>
            </div>
        </div>

        <!-- Customer Card -->
        <div class="col-lg-4 mb-4">
            <div class="card bg-white text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-users fa-3x text-info mb-3"></i>
                    <h5 class="card-title mb-3">Happy Customers</h5>
                    <h2 class="card-text display-3">1244</h2>
                    <p class="card-text">New Customers This Month: 98</p>
                    <a href="#" class="btn btn-outline-info">View Customers</a>
                </div>
            </div>
        </div>

        <!-- Report Card -->
        <div class="col-lg-4 mb-4">
            <div class="card bg-white text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x text-warning mb-3"></i>
                    <h5 class="card-title mb-3">Monthly Report</h5>
                    <p class="card-text">Total Dogs Listed: 500</p>
                    <p class="card-text">Popular Breeds: German Shepherd, Golden Retriever</p>
                    <p class="card-text">Average Sales per Day: 15 dogs</p>
                    <a href="#" class="btn btn-outline-warning">View Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

<!-- Transaction History Table -->
<div class="container mt-5">
    <h3 class="text-center mb-4">Transaction History</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Breed</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2024-05-01</td>
                    <td>John Doe</td>
                    <td>German Shepherd</td>
                    <td>$1000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>2024-05-05</td>
                    <td>Jane Smith</td>
                    <td>Labrador Retriever</td>
                    <td>$1200</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>2024-05-10</td>
                    <td>Michael Johnson</td>
                    <td>Golden Retriever</td>
                    <td>$1500</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
<!-- Transaction History Table End -->


