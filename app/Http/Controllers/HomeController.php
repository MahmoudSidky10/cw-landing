<?php

namespace App\Http\Controllers;

use App\Models\Faq;

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

    public function faq()
    {
        $faqs = Faq::where('is_active', 1)
            ->orderBy('category')
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category');

        return view('web.faq', compact('faqs'));
    }

    public function privacyPolicy()
    {
        return view('web.privacy-policy');
    }

}
