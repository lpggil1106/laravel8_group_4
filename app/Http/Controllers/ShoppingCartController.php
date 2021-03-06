<?php

namespace App\Http\Controllers;

use App\Models\OrderProducts;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {
        // 取得要加入的產品資訊
        $products = Products::find($request->id);

        \Cart::add(array(
            'id' => $products->id,
            'name' => $products->name,
            'price' => $products->price,
            'quantity' => 1,
            'attributes' => array(
                'image_url' => $products->image_url
            )
        ));

        return 'success';
    }
    public function update(Request $request)
    {
        // 從資料庫中取得要更新的產品資訊
        $products = Products::find($request->id);
        // 更新購物車
        \Cart::update($products->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
          ));
        // 取出購物車中該產品資料
        $item = \Cart::get($products->id);

        // 返回該產品目前購物車內數量
        return $item;
    }

    public function delete(Request $request)
    {
        \Cart::remove($request->id);
        return 'success';
    }

    public function step01()
    {
        $items = \Cart::getContent()->sortBy('id');
        return view('front.shopping-cart.step01',compact('items'));
    }

    public function step02()
    {
        return view('front.shopping-cart.step02');
    }

    public function step02Store(Request $request)
    {
        //payment 0:信用卡付款 1:網路 ATM 2:超商代碼
        //shipment 0:黑貓宅配 1:超商店到店
        session([
            'payment' => $request->payment,
            'shipment' => $request->shipment
        ]);

        return redirect()->route('shopping-cart.step03');
    }

    public function step03()
    {
        return view('front.shopping-cart.step03');
    }

    public function step03Store(Request $request)
    {
        $order = Orders::create([
            'order_no'=>'DP'.time(),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'payment' => session('payment'),
            'shipment' => session('shipment'),
        ]);

        $items = \Cart::getContent();
        $itemInfo=[];
        foreach ($items as  $item) {
            $products = products::find($item->id);
            OrderProducts::create([
                'order_id' => $order->id,
                'product_id' => $products->id,
                'name' => $products->name,
                'price' => $products->price,
                'quantity' => $item->quantity,
                'image_url' => $products->image_url,
            ]);
            $new_ary = [
                'name' => $products->name,
                'qty' => $item->quantity,
                'price' => $products->price,
                'unit' => '個'
            ];

            array_push($itemInfo, $new_ary);
        }
        $new_ary = [
            'name' => '運費',
            'qty' => 1,
            'price' => 60,
            'unit' => '個'
        ];
        array_push($itemInfo, $new_ary);

        \Cart::clear();
        return redirect()->route('shopping-cart.step04',['order_no'=>$order->order_no]);
    }

    public function step04($orderNo)
    {
        $order = Orders::with('orderProducts')->where('order_no',$orderNo)->first();
        return view('front.shopping-cart.step04', compact('order'));
    }
}
