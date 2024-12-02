<?php




namespace App\Http\Controllers;



class CVController extends Controller
{
    // CV ফাইল প্রদর্শন করার জন্য
    public function showCV()
    {
        return view('user.showCV');
    }
}


