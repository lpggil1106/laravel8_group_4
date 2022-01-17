<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();

        return view('front.index',compact('news'));
    }

    public function courseList()
    {
        return view('front.course-list');
    }

    public function courseContent()
    {
        return view('front.course-content');
    }

    public function shopList()
    {
        return view('front.shop-list');
    }

    public function shopContent()
    {
        return view('front.shop-content');
    }

    public function newsList()
    {
        $news = DB::table('news')->get();

        return view('front.news-list',compact('news'));
    }

    public function newsContent($id)
    {
        $news = DB::table('news')->find($id);

        return view('front.news-content',compact('news'));
    }

    public function notice()
    {
        return view('front.notice');
    }
}
