@extends('layouts.template')
@section('title','完成訂購')

@section('css')
{{-- bootstrap Core CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
{{-- checkout Core CSS --}}
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">
<style>
    body {
        font-size: 18px;
    }
    .img {
        width: 80px;
        height: 80px;
        background-size: cover;
        background-position: center;
        border-radius: 50%;
        margin-right: 10px;
    }
    .order-item-price>span {
        display: inline-block;
        text-align: end;
        min-width: 100px;
        font-size: 18px !important;
    }
    .order-item-price>.qty {
        width: 65px !important;
        text-align: center;
    }
    #cart .card .send_information label{
        width: auto;
        margin-right: 10px;
    }
</style>
@endsection

@section('main')
<section id="cart">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <!-- 購物車的header -->
                @include('front.shopping-cart.shpping-cart-header',['step'=>4])
                <!-- 完成訂購 -->
                <div class="mt-4 pt-4">
                    <h1 class="text-center font-weight-bold">訂單成立</h1>
                    <!-- 訂單明細 -->
                    <div class="order_detail">
                        <h3 class="mb-4">訂單明細</h3>
                        {{-- @php
                            $totalQty = 0;
                            $subtotal = 0;
                        @endphp --}}
                        {{-- @foreach ($order->orderDetails as $orderDetail) --}}
                        {{-- @php
                            $totalQty += $orderDetail->qty;
                            $totalPrice = $orderDetail->qty*$orderDetail->price;
                            $subtotal += $totalPrice;
                        @endphp --}}
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-4 order-item">
                            <div class="d-flex align-items-center order-item-info">
                                <div class="img"
                                    style="background-image: url('')"></div>
                                <div>
                                    <p></p>
                                </div>
                            </div>
                            <div class="order-item-price d-flex align-items-center">
                                <h5>x</h5>
                                <span>$</span>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    <!-- 寄送資料 -->
                    <div class="mt-4 pt-4 send_information">
                        <h3>寄送資料</h3>
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="name">姓名:</label>
                            <div class="checkout4_name infor_text"></div>
                        </div>
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="phoneNumber">電話:</label>
                            <div class="checkout4_phoneNumber infor_text"></div>

                        </div>
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="email">Email:</label>
                            <div class="checkout4_email infor_text"></div>
                        </div>
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="city">地址:</label>
                            <div class="checkout4_city infor_text"></div>
                        </div>

                    </div>
                    <div class="mt-4 pt-4 send_information">
                        <h3>付款及運送方式</h3>
                        {{-- @php
                            use App\Models\Order;
                        @endphp --}}
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="city">付款方式:</label>
                            <div class="checkout4_city infor_text"></div>
                        </div>
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="city">付款狀態:</label>
                            <div class="checkout4_city infor_text"></div>
                        </div>
                        <div class="d-flex ml-2 mt-2 pt-3">
                            <label class="city">運送方式:</label>
                            <div class="checkout4_city infor_text"></div>
                        </div>
                    </div>
                </div>
                <!-- 購物車的footer -->
                @include('front.shopping-cart.shopping-cart-footer',['step'=>4])

            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    
@endsection