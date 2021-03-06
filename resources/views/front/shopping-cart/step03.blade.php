@extends('layouts.template')
@section('title','寄送資料')

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
                @include('front.shopping-cart.shpping-cart-header',['step'=>3])
                <!-- 寄送資料 -->
                <div class="mt-5">
                    <form action="" method="post" id="step03-form" class="paymentMethod_form-group">
                        @csrf
                        <fieldset>
                            <legend>寄送資料</legend>
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="姓名" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">電話</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="電話" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="address">地址</label>
                                <div class="d-flex flex-column">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="地址" required>
                                </div>
                            </div>
                        </fieldset>
                        <button id="submit-btn" hidden></button>
                    </form>
                </div>
                <!-- 購物車的footer -->
                @include('front.shopping-cart.shopping-cart-footer',['step'=>3])
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