<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class HomeController extends Controller
{
    public function index() {
        $Portofolio =Portofolio::all();
        return view("home", [
            'title' => 'Home',
            'active' => 'home',
            'portofolios' => Portofolio::take(4)->get()
        ]);
    }
}

