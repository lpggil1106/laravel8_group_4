<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategories;
use App\Models\ServiceCategories;

class ProductCategoriesController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategories::with('serviceCategories')->get();
        return view('admin.product_categories.index', compact('product_categories'));
    }

    public function create()
    {
        $service_categories = ServiceCategories::get();
        return view('admin.product_categories.create', compact('service_categories'));
    }

    public function store(Request $request)
    {
        ProductCategories::create($request->all());
        return redirect('admin/product-categories');
    }

    public function edit($id)
    {
        $product_categories = ProductCategories::find($id);
        $service_categories = ServiceCategories::get();
        return view('admin.product_categories.edit', compact('product_categories','service_categories'));
    }

    public function update(Request $request, $id)
    {
        ProductCategories::find($id)->update($request->all());
        return redirect('admin/product-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductCategories::find($id)->delete();
        return redirect('admin/product-categories');
        $product_categories = ProductCategories::with('product')->find($id);
        if($product_categories->product->count()){
            return redirect()
            ->route('product-categories.index')
            ->with([
                'message'=> $product_categories->name.'類別尚存'.$product_categories->count().'個產品，無法刪除',
                'color' => 'alert-danger',
                'icon' => 'error',
            ]);
        }
        ProductCategories::find($id)->delete();
        return redirect()
        ->route('categories.index')
        ->with([
            'message'=>'刪除成功!!',
            'color' => 'alert-success',
            'icon' => 'success',
        ]);
    }
}
