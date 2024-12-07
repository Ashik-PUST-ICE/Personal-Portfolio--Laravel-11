<!doctype html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .content {
            margin-top: 100px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
        }

        .form-group input, .form-group select {
            border-radius: 8px;
            padding: 10px;
            font-size: 1rem;
            width: 100%;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #218838;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .image-preview {
            margin-top: 10px;
            display: block;
        }

        .image-preview img {
            border-radius: 5px;
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

        <div class="content">
            <h1>Edit Product</h1>
            <div class="form-container">
                <form action="{{ route('admin.update_product', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image (Leave blank to keep current image)</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if ($product->image)
                            <div class="image-preview">
                                <img src="{{ asset('images/' . $product->image) }}" alt="Current Image" width="100">
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn">Update Product</button>
                </form>
            </div>
        </div>

        @include('admin.footer')
        @include('admin.js')
    </div>
</body>

</html>
