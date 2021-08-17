<?php

namespace App\Http\Controllers;

use App\VisitorModel;
use Auth;

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
        $data = VisitorModel::where('email', Auth::user()->email)->get();
        return view('home')->with(compact('data'));
    }
}
