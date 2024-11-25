<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::inRandomOrder()->limit(6)->get();
        return view('home', ['packages' => $packages]);
    }
}
