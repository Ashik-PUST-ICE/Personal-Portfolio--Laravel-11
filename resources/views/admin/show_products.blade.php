<!doctype html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .table th, .table td {
            text-align: center;
        }

        .table img {
            border-radius: 5px;
        }

        .btn {
            font-size: 14px;
            padding: 6px 12px;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .page-wrapper {
            margin-top: 20px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .product-actions {
            display: flex;
            justify-content: space-around;
        }

        /* Content area with margin to avoid overlap with navbar */
        .content {
            margin-top: 100px; /* Adjust content position */
        }

        .container {
            padding: 20px;
        }

        /* To make the table smaller */
        .table {
            width: 100%;
            height: 110%; /* Reduce the table width */
            margin-left: auto;
            margin-right: auto;
        }

        /* Ensure table stays outside the sidebar and navbar */
        .main-content {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            @include('admin.nav')
        </aside>

        <!-- Content Area -->
        <div class="content">
            <div class="container">
                <h1 class="mb-4 text-center">All Products</h1>
                <div class="main-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->category->category_name }}</td>
                                        <td>${{ number_format($product->price, 2) }}</td>
                                        <td>
                                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}" width="50">
                                        </td>
                                        <td class="product-actions">
                                            <a href="{{ route('admin.edit_product', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('admin.delete_product', $product->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.footer')
        @include('admin.js')
    </div>
</body>

</html>
