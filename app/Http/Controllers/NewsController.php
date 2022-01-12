<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\NewCategories;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('newsCategories')->get();
        // $abc = News::find(1);
        // $bb = Storage::url($abc->image_url);
        // dd($bb);
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_categories = NewCategories::get();
        return view('admin.news.create', compact('news_categories'));
    }

    public function store(Request $request)
    {
        $path = Storage::put('/news',$request->image_url);

        News::create([
            'title'=>$request->title,
            'date'=>$request->date,
            'content'=>$request->content,
            'image_url'=>$path,
            'new_categories_id'=>$request->new_categories_id,
        ]);
        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $news_categories = NewCategories::get();
        $news = News::find($id);
        return view('admin.news.edit', compact('news','news_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        if($request->hasFile('image_url')){
            Storage::delete($news->image_url);
            $path = Storage::put('/product',$request->image_url);
        }else{
            $path = $news->image_url;
        }

        $news->update([
            'new_categories_id' => $request->new_categories_id,
            'name' => $request->name,
            'price' => $request->price,
            'image_url' => $path,
            'content' => $request->content,
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        Storage::delete($news->image_url);
        $news->delete();

        return redirect()->route('news.index');
    }
}
