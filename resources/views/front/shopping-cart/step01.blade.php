@extends('layouts.template2')

@section('title', '確認購物車')

@section('css')
    {{-- bootstrap Core CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    {{-- sweetalert Core CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.css">
    {{-- checkout Core CSS --}}
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endsection


@section('main')
    <section id="cart">
        <div class="container">
            <div class="card">
                <div class="card-body p-5">
                    <!-- 購物車的header -->
                    @include('front.shopping-cart.shpping-cart-header',['step'=>1])
                    <!-- 訂單明細 -->
                    <div class="mt-5">
                        <h3 class="mb-4">訂單明細</h3>
                        @foreach ($items as $item)
                            <div class="d-flex justify-content-between align-items-center mt-4 pt-4 order-item">
                                <div class="d-flex align-items-center order-item-info">
                                    <div class="delete-btn" data-id="{{ $item->id }}">X</div>
                                    <div class="img"
                                        style="background-image: url({{ Storage::url($item->attributes->image_url) }})">
                                    </div>
                                    <div>
                                        <p>{{ $item->name }}</p>
                                    </div>
                                </div>
                                <div class="order-item-price item" data-id="{{ $item->id }}">
                                    <button class="minus" type="button">-</button>
                                    <input class="qty" type="number" value="{{ $item->quantity }}">
                                    <button class="plus" type="button">+</button>
                                    <span class="item-total"
                                        data-single="{{ $item->price }}">${{ number_format($item->price * $item->quantity) }}</span>
                                </div>
                            </div>
                        @endforeach
                        <!-- 購物車的footer -->
                        @include('front.shopping-cart.shopping-cart-footer',['step'=>1])
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.all.min.js"
        integrity="sha512-ZDaLH0jZny06ANbDr8eXL5xZJb3QwAiWIT1YJcQ3hdMeqv1LC+dwwD2484mqNa6mo1nb10EopYnWcGrPG244kg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
    function itemQtyCalc(element,compute){
        const itemElement = element.parentElement;
        const qtyElement = element.parentElement.querySelector('.qty');

        let productId = itemElement.getAttribute('data-id');
        let qty = Number(qtyElement.value) + compute;
        qty = qty < 1 ? 1 : qty;

        let formData = new FormData();
        formData.append('_token','{{csrf_token()}}');
        formData.append('id',productId);
        formData.append('qty',qty);

        let url = '{{route('shopping-cart.update')}}';
        fetch(url,{
            'method':'post',
            'body':formData
        }).then(function (response) {
            return response.json();
        }).then(function (item) {
            if (item.quantity) {
                qtyElement.value = item.quantity;
                itemTotalCalc(element);
                orderTotalCalc();
            }
        });
    }
    function itemTotalCalc(element) {
        const priceElement = element.parentElement.querySelector('.item-total');
        const qtyElement = element.parentElement.querySelector('.qty');
        let price = priceElement.getAttribute('data-single');
        let qty = qtyElement.value;
        let total = price * qty;
        priceElement.textContent = `\$${total.toLocaleString()}`;
    }
    function orderTotalCalc() {
        const itemElements = document.querySelectorAll('.item');
        const orderQtyElement = document.querySelector('#qty');
        const orderSubtotalElement = document.querySelector('#subtotal');
        const orderTotalElement = document.querySelector('#total');
        let totalQty = 0;
        let subtotal = 0;
        let charge = 60;
        let total = 0;
        itemElements.forEach(function (itemElement) {
            const qtyElement = itemElement.querySelector('.qty');
            const priceElement = itemElement.querySelector('.item-total');
            totalQty += Number(qtyElement.value);
            subtotal += qtyElement.value * priceElement.getAttribute('data-single');
        });
        total = charge + subtotal;
        orderQtyElement.textContent = totalQty;
        orderSubtotalElement.textContent = `\$${subtotal.toLocaleString()}`;
        orderTotalElement.textContent = `\$${total.toLocaleString()}`;
    }

    const minusElements = document.querySelectorAll('.minus');
    const plusElements = document.querySelectorAll('.plus');
    const deleteElements = document.querySelectorAll('.delete-btn');
    minusElements.forEach(function (minusElement) {
        minusElement.addEventListener('click',function () {
            itemQtyCalc(this,-1);
        });
    });
    plusElements.forEach(function (plusElement) {
        plusElement.addEventListener('click',function () {
            itemQtyCalc(this,1);
        });
    });
    deleteElements.forEach(function (deleteElement) {
        deleteElement.addEventListener('click',function () {
            Swal.fire({
                title: '是否刪除該商品?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是',
                cancelButtonText: '否',
            }).then((result) => {
                if(result.isConfirmed){
                    let productId = this.getAttribute('data-id');
                    let deleteBtn = this;
                    let formData = new FormData();
                    formData.append('_token','{{csrf_token()}}');
                    formData.append('id',productId);
                    let url = '{{route('shopping-cart.delete')}}';
                    fetch(url,{
                        'method':'post',
                        'body':formData
                    }).then(function (response) {
                        return response.text();
                    }).then(function (data) {
                        if(data == 'success'){
                            deleteBtn.parentElement.parentElement.remove();
                            orderTotalCalc();
                            Swal.fire(
                                '刪除成功!'
                            )
                        }
                    });
                }
            })

        });
    });

    orderTotalCalc();
</script>

    <!-- jQuery JS CDN -->
    <!-- 通常jQuery都會放在最上面 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- popper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- bootstrap Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
@endsection
