<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Flasher\Laravel\Facade\Flasher;

class ProductController extends Controller
{
    // Show the form to add a product
    public function showAddProductForm()
    {
        // Fetch all categories to display in the select dropdown
        $categories = Category::all();
        return view('admin.add_product', compact('categories'));
    }

    // Handle the form submission to add a new product
    public function addProduct(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validate image
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);  // Move image to public/images directory
        }

        // Create the product and store it in the database
        Product::create([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'image' => $imageName,  // Save the image path in the database
        ]);

        // Flash success message using the Flasher facade
        Flasher::addSuccess('Product Added Successfully.', ['timeout' => 1000]); // 1000ms = 1 second

        // Redirect back with the flash message
        return redirect()->route('admin.add_product');
    }

    // Show all products
    public function showProducts()
    {
        // Fetch all products from the database
        $products = Product::all();
        return view('admin.show_products', compact('products'));
    }

    // Show the form to edit a product
    public function editProduct($id)
    {
        // Fetch the product by its ID
        $product = Product::findOrFail($id);

        // Fetch all categories to display in the select dropdown for editing
        $categories = Category::all();

        return view('admin.edit_product', compact('product', 'categories'));
    }

    // Update a product's details
    public function updateProduct(Request $request, $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Image is optional for update
        ]);

        // Fetch the product by its ID
        $product = Product::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);  // Move image to public/images directory
            $product->image = $imageName;  // Update the product image
        }

        // Update the product in the database
        $product->update([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
        ]);

        // Flash success message using the Flasher facade
        Flasher::addSuccess('Product Updated Successfully.', ['timeout' => 1000]); // 1000ms = 1 second

        // Redirect back to the product list page
        return redirect()->route('admin.show_products');
    }

    // Delete a product
    public function deleteProduct($id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);

        // Delete the product from the database
        $product->delete();

        // Flash success message using the Flasher facade
        Flasher::addSuccess('Product Deleted Successfully.', ['timeout' => 1000]); // 1000ms = 1 second

        // Redirect back to the product list page
        return redirect()->route('admin.show_products');
    }



public function addToCart($productId)
{
    $product = Product::find($productId);

    // Check if the product exists
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found!');
    }

    // Retrieve the current cart from session, or initialize an empty array
    $cart = Session::get('cart', []);

    // Check if the product is already in the cart
    if (isset($cart[$productId])) {
        // If product already exists, increment the quantity
        $cart[$productId]['quantity']++;
    } else {
        // If product doesn't exist in the cart, add it
        $cart[$productId] = [
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image,
        ];
    }

    // Save the updated cart back to the session
    Session::put('cart', $cart);

    // Redirect back with success message
    return redirect()->route('cart.show')->with('success', 'Product added to cart!');
}

public function showCart()
{
    // Get cart items from session
    $cart = Session::get('cart', []);

    // Fetch products based on the IDs stored in the session
    $products = Product::whereIn('id', array_keys($cart))->get();

    // Pass the products to the view
    return view('user.mycart', compact('products'));
}



public function removeFromCart($productId)
{
    $cart = Session::get('cart', []);

    if (isset($cart[$productId])) {
        unset($cart[$productId]);
        Session::put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product removed from cart.');
    }

    return redirect()->route('cart.show')->with('error', 'Product not found in cart.');
}

public function showProduct($id)
{
    // Fetch the product by its ID
    $product = Product::findOrFail($id);

    // Pass the product to the view
    return view('user.product-details', compact('product'));
}



}
