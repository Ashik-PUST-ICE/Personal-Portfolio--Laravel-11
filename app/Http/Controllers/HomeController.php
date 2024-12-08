<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.dashboard', compact('data'));
    }



        public function user()
        {
            return view('user.dashboard'); // Ensure this view exists
        }




        public function about()
        {
            return view('user.about'); // Ensure this view exists
        }




        public function skill()
        {
            return view('user.skill'); // Ensure this view exists
        }


        public function contact()
        {
            return view('user.contact'); // Ensure this view exists
        }


        public function Products()

        {
            $products = Product::all(); // Sob product gulo database theke fetch korbe
            return view('user.Products', compact('products'));
        }


}
