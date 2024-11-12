<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
        .btn-buy {
            background-color: #28a745;
            color: white;
        }
        .btn-buy:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header class="bg-light py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a href="#" class="navbar-brand font-weight-bold">MyShop</a>

                <!-- Navigation -->
                <nav class="d-none d-md-flex">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">Products</a>
                    <a href="#" class="nav-link">About</a>
                    <a href="#" class="nav-link">Contact</a>
                </nav>

                <!-- Cart Icon -->
                <div>
                    <a href="#" class="text-dark position-relative">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <!-- Badge for Cart Item Count -->
                        <span class="badge badge-danger position-absolute top-0 start-100 translate-middle">
                            {{ (session()->has('cart'))?count(session('cart')):'0' }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>


<div class="container my-5">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <form action="{{ route('buy_now') }}" method="POST">
                @csrf
            <div class="card shadow-sm">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body text-center">
                    <h5 class="card-title">Beg</h5>
                    <p class="card-text">$10</p>
                    <input type="hidden" value="10" name="product_price">
                    <input type="hidden" value="beg" name="product_name">


                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </form>

        </div>


    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
