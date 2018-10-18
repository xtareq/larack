<?php

namespace App\Http\Controllers\Xdmin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/xdmin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('xdmin.auth:xdmin');
    }

    /**
     * Show the Xdmin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('xdmin.home');
    }

}