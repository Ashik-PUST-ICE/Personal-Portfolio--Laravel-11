<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>

    @include('user.css') <!-- External CSS -->
    <style>
        section {
            background-color: black;
            padding-top: 60px;
            padding-bottom: 50px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        /* 4 items per row */
        .col-md-3 {
            flex: 1 0 22%;
            padding: 10px;
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 380px;
            overflow: hidden;
            position: relative;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .card-price {
            font-size: 16px;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-cart {
            display: inline-block;
            background-color: #28a745;
            color: white;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            width: 100%;
            position: absolute;
            bottom: 10px;
            left: 0;
        }

        .btn-cart:hover {
            background-color: #218838;
        }

        .view-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color:black;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 8px;
            transition: background-color 0.3s ease;
        }

        .view-icon:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .card-footer {
            padding: 10px;
            text-align: center;
            background-color: #f7f7f7;
            border-top: 1px solid #ddd;
        }

        /* Responsive layout for smaller screens */
        @media (max-width: 1200px) {
            .col-md-3 {
                flex: 1 0 22%;
            }
        }

        @media (max-width: 992px) {
            .col-md-3 {
                flex: 1 0 30%;
            }
        }

        @media (max-width: 768px) {
            .col-md-3 {
                flex: 1 0 45%;
            }
        }

        @media (max-width: 576px) {
            .col-md-3 {
                flex: 1 0 100%;
            }
        }
    </style>
</head>
<body>

@include('user.nav') <!-- Keep Navbar unchanged -->

<!-- Body Section wrapped inside section tag -->
<section>
    <div class="container">
        <h1>Available Products</h1>
        <div class="row">
            @foreach($products as $product)
            <div class="mb-4 col-md-3">
                <div class="card">
                    <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->product_name }}">
                    <div class="view-icon">
                        <a href="" class="btn-details">👁️</a>
                        {{-- {{ route('product.details', $product->id) }} --}}
                    </div>
                    <div class="card-body">
                        <p class="card-title">{{ $product->product_name }}</p>
                        <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
                        <p class="card-price">${{ $product->price }}</p>
                    </div>
                    <a href="" class="btn-cart">Add to Cart</a>
                    {{-- {{ route('add-to-cart', $product->id) }} --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('user.footer') <!-- Footer Included -->

@include('user.js') <!-- JavaScript Included -->

</body>
</html>
