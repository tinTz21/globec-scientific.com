<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about(){
        return view('dashboard.about');
    }  

    public function products(){
        return view('dashboard.products');
    }  

    public function career(){
        return view('dashboard.career');
    }

    public function contact_us(){
        return view('dashboard.contact_us');
    }

    public function news(){
        return view('dashboard.news');
    } 

    public function testimonies(){
        return view('dashboard.testimonies');
    }
}
