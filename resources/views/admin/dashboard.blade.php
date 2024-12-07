<!doctype html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        body {
            background-color: #f4f4f9; /* Light background color for better contrast */
            color: black;
            margin: 0;
            padding: 0;
        }

        .div_deg {
            margin: 20px auto; /* Center the form horizontally */
            width: 50%; /* Adjust the width of the form */
            text-align: center;
        }

        .table-container {
            margin: 50px auto; /* Center the table and add spacing from navbar */
            width: 80%; /* Table width relative to the screen */
        }

        .table_deg {
            border: 1px solid #ddd; /* Light border color */
            width: 100%; /* Make table occupy container width */
            text-align: left;
            background-color: white; /* Set background to white */
            border-collapse: collapse;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Add shadow for effect */
        }

        .table_deg th, .table_deg td {
            border: 1px solid #ddd; /* Light gray borders */
            padding: 15px; /* Add space inside cells */
            text-align: center; /* Center align text in cells */
        }

        .table_deg th {
            background-color: #f0f0f0; /* Light gray header background */
        }

        .btn {
            padding: 5px 15px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-success {
            color: white;
            background-color: green;
            border: none;
            border-radius: 5px;
        }

        .btn-danger {
            color: white;
            background-color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
            <h1 style="color: black; text-align: center; margin-top: 20px;">Add Category</h1>

            <div class="div_deg">
                <form action="{{ url('add_category') }}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="category" required>
                        <input type="submit" class="btn btn-primary" value="Add Category">
                    </div>
                </form>
            </div>

            <!-- Table Below Form -->
            <div class="table-container">
                <table class="table_deg">
                    <tr>
                        <th>Category Name</th>
                        <th>Edit Category Name</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data as $category)
                    <tr>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ url('edit_category',$category->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn-danger" onclick="confirmation(event)" href="{{ url('delete_category', $category->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        @include('admin.footer')
        @include('admin.js')
    </div>
</body>

</html>
