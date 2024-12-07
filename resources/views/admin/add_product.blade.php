<!doctype html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .content {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 100px); /* Adjust to fit the body, taking navbar and footer into account */
        }

        .div_deg {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .div_deg label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .div_deg input,
        .div_deg select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .div_deg input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .div_deg input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
            color: black;
            margin-bottom: 30px;
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
            <h1>Add Product</h1>

            <div class="div_deg">
                <form action="{{ url('add_product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="category">Category</label>
                        <select name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" required>
                    </div>

                    <div>
                        <label for="price">Price</label>
                        <input type="number" name="price" required>
                    </div>

                    <div>
                        <label for="image">Product Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Add Product">
                    </div>
                </form>

            </div>
        </div>

        @include('admin.footer')
        @include('admin.js')
    </div>
</body>

</html>
