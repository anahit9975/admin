<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FrontModels\Home;
class HomeController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $arr['products'] = Home::all();
       return view('frontend.fronthome')->with($arr);
    }
}
