<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\ProductCategories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Productproduct_categories;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view('admin.Products.index',compact('products'));
    }

    public function create()
    {
        $product_categories = ProductCategories::get();
        return view('admin.products.create',compact('product_categories'));
    }

    public function store(Request $request)
    {
        $path = Storage::put('/',$request->image_url);
        $url = Storage::url($path);
        $temp = Products::create([
            'name'=>$request->name,
            'content'=>$request->content,
            'price'=>$request->price,
            'image_url'=>$path,
            'product_categories_id'=>$request->product_categories_id,
            'block1' =>$request->block1,
            'block2' =>$request->block2,
            'block3' =>$request->block3,
        ]);

        $files = $request->file('files');
        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $path2 = $file->store('files');
                $file = [
                    'image_url'=>$path2,
                    'product_id'=>$temp->id,
                ];
                $file = ProductImages::create($file);
            }
        };

        return redirect('admin/products');
    }

    public function edit($id)
    {
        $products = Products::with('productImages')->find($id);
        $files = $products->productImages;
        $product_categories = ProductCategories::get();
        return view('admin.products.edit', compact('products','files','product_categories'));
    }

    public function update(Request $request, $id)
    {
        $path = DB::table('products')->where('id', $id)->value('image_url');
        if($request->image_url != null ){
            Storage::disk('public')->delete($path);
            $path = Storage::put('/',$request->image_url);
            Products::find($id) ->update(['image_url'=>$path,]);
        };

        $temp = Products::find($id) ->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'product_categories_id'=>$request->product_categories_id,
            'block1' =>$request->block1,
            'block2' =>$request->block2,
            'block3' =>$request->block3,
        ]);

        $files = $request->file('files');
        if($request->hasFile('files')){
            foreach ($files as $file) {
                $path2 = $file->store('files');
                $file = [
                    'image_url'=>$path2,
                    'product_id'=>$id,
                ];
                $file = ProductImages::create($file);
            }
        };
        return redirect('admin/products');
    }

    public function destroy($id)
    {
        $path = DB::table('products')->where('id', $id)->value('image_url');
        $productImages = DB::table('product_images')->where('product_id', $id)->get();
        foreach($productImages as $item){
            Storage::delete($item->image_url);
        }
        Storage::disk('public')->delete($path);
        Products::where('id', $id)->delete();
        ProductImages::where('product_id', $id)->delete();
        return redirect('admin/products');
    }

    public function multiDestroy($id)
    {
        $path = DB::table('product_images')->where('id', $id)->value('image_url');
        dd($path);
        Storage::disk('public')->delete($path);
        $Products = DB::table('Product_images')->where('id', $id)->delete();
        return redirect('admin/products/edit/$id');
    }

    public function imageDelete(Request $request){
        // 找出對應的圖片
        // 找出對應的其他圖片
        $productImage = ProductImages::find($request->id);

        // 將圖片檔案刪除
        Storage::delete($productImage->image_url);
        // 將資料從資料庫移除
        $productImage->delete();

        return true;
    }
}
