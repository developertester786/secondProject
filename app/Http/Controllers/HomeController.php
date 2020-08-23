<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
use Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $listings = DB::table('listings')
        ->select('*')
        ->where('status', 1)
        ->inRandomOrder()
        ->get();
        return view('home',['listings'=>$listings, 'title'=>'Home']);
       // return view('home');
    }
}
