<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function courseList()
    {
        return view('front.course-list');
    }

    public function shopList()
    {
        return view('front.shop-list');
    }

    public function newsList()
    {
        return view('front.news-list');
    }

    public function newsContent()
    {
        return view('front.news-content');
    }
}
