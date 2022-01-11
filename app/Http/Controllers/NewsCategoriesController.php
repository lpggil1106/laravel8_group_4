<?php

namespace App\Http\Controllers;

use App\Models\NewCategories;
use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_categories = NewCategories::get();
        return view('admin.news_categories.index', compact('news_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NewCategories::create($request->all());
        return redirect('admin/news-categories');
    }

    public function edit($id)
    {
        $news_categories = NewCategories::find($id);
        return view('admin.news_categories.edit', compact('news_categories'));
    }

    public function update(Request $request, $id)
    {
        NewCategories::find($id)->update($request->all());
        return redirect('admin/news-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewCategories::find($id)->delete();
        return redirect('admin/news-categories');
        $news_categories = NewCategories::with('news')->find($id);
        if($news_categories->news->count()){
            return redirect()
            ->route('news-categories.index')
            ->with([
                'message'=> $news_categories->name.'類別尚存'.$news_categories->count().'個產品，無法刪除',
                'color' => 'alert-danger',
                'icon' => 'error',
            ]);
        }
        NewCategories::find($id)->delete();
        return redirect()
        ->route('categories.index')
        ->with([
            'message'=>'刪除成功!!',
            'color' => 'alert-success',
            'icon' => 'success',
        ]);
    }
}
