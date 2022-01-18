@extends('layouts.template')
@section('title','付款與運送方式')

@section('css')
{{-- bootstrap Core CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
{{-- checkout Core CSS --}}
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">
@endsection

@section('main')
<section id="cart">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <!-- 購物車的header -->
                @include('front.shopping-cart.shpping-cart-header',['step'=>2])
                <!-- 付款方式/運送方式 -->
                <form action="" method="post" class="container" id="step02-form">
                    @csrf
                    <h3 class="fs-2">付款方式</h3>
                    <div class="form-group column py-2 px-4">
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="payment" id="credit-card" value="0" checked>
                            <label class="form-check-label fs-3" for="credit-card">信用卡付款</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="payment" id="atm" value="1">
                            <label class="form-check-label fs-3" for="atm">網路 ATM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="payment" id="cvs-code" value="2">
                            <label class="form-check-label fs-3" for="cvs-code">超商代碼</label>
                        </div>
                    </div>
                    <h3 class="fs-2">運送方式</h3>
                    <div class="form-group column py-2 px-4">
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="shipment" id="b2c" value="0" checked>
                            <label class="form-check-label fs-3" for="home">黑貓宅配</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="shipment" id="cvs" value="1">
                            <label class="form-check-label fs-3" for="cvs">超商店到店</label>
                        </div>
                    </div>
                    <button id="submit-btn" hidden></button>
                </form>
                <!-- 購物車的footer -->
                @include('front.shopping-cart.shopping-cart-footer',['step'=>2])
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    const nextElement = document.querySelector('#next');
    nextElement.addEventListener('click',function () {
        document.querySelector('#submit-btn').click();
    });
</script>
@endsection