<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Customers;
use App\Mail\ContactNotify;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\ProductCategories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->where('id','<=',3)->get();
        return view('front.index',compact('news'));
    }

    public function courseList(Request $request)
    {
        $courseCategories = ProductCategories::where('service_id','1')->get();
        $idArray = array();
        foreach($courseCategories as $item){
            array_push($idArray, $item->id);
        }
        if($request->category_id){
            $products = Products::where('product_categories_id',$request->category_id)->get();
        }else{
                $products = Products::whereIn('product_categories_id',$idArray)->get();
        }
        return view('front.course-list',compact('courseCategories','products'));
    }

    public function courseContent($id)
    {
        $images = ProductImages::where('product_id',$id)->get();
        $course = Products::find($id);
        return view('front.course-content', compact('course','images'));
    }

    public function shopList(Request $request)
    {
        $courseCategories = ProductCategories::where('service_id','2')->get();
        $idArray = array();
        foreach($courseCategories as $item){
            array_push($idArray, $item->id);
        }
        if($request->category_id){
            $products = Products::where('product_categories_id',$request->category_id)->get();
        }else{
                $products = Products::whereIn('product_categories_id',$idArray)->get();
        }
        return view('front.shop-list',compact('courseCategories','products'));
    }

    public function shopContent($id)
    {
        $images = ProductImages::where('product_id',$id)->get();
        $course = Products::find($id);
        return view('front.shop-content', compact('course','images'));
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

    public function contact(Request $request)
    {
        $contact = Customers::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to($contact->email)->send(new ContactNotify($contact));

        return redirect()->route('front.index');
    }

    public function contactPage()
    {
        return view('front.contact');
    }

}
