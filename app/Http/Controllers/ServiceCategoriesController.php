<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategories;

class ServiceCategoriesController extends Controller
{
    public function index()
    {
        $service_categories = ServiceCategories::get();
        return view('admin.service_categories.index', compact('service_categories'));
    }

    public function create()
    {
        return view('admin.service_categories.create');
    }

    public function store(Request $request)
    {
        ServiceCategories::create($request->all());
        return redirect('admin/service-categories');
    }

    public function edit($id)
    {
        $service_categories = ServiceCategories::find($id);
        return view('admin.service_categories.edit', compact('service_categories'));
    }

    public function update(Request $request, $id)
    {
        ServiceCategories::find($id)->update($request->all());
        return redirect('admin/service-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceCategories::find($id)->delete();
        return redirect('admin/service-categories');
        $service_categories = ServiceCategories::with('product_categories')->find($id);
        if($service_categories->service->count()){
            return redirect()
            ->route('service-categories.index')
            ->with([
                'message'=> $service_categories->name.'類別尚存'.$service_categories->count().'個產品，無法刪除',
                'color' => 'alert-danger',
                'icon' => 'error',
            ]);
        }
        ServiceCategories::find($id)->delete();
        return redirect()
        ->route('categories.index')
        ->with([
            'message'=>'刪除成功!!',
            'color' => 'alert-success',
            'icon' => 'success',
        ]);
    }
}
