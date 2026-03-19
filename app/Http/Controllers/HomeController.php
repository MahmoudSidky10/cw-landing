<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home.index');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function about()
    {
        return view('web.about');
    }

    public function service()
    {
        return view('web.service');
    }

    public function blog()
    {
        return view('web.blog');
    }

}
