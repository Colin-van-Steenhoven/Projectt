<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHome() {
        return view('homepage');
    }
    
    public function viewAboutUs() {
        return view('about-us');
    }

    public function viewContact() {
        return view('contact');
    }

    public function showTest2() {
        return view('test2');
    }
}
