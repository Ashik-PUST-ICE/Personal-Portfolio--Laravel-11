<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
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

}
