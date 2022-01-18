@extends('layouts.app')
@section('css')

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">首頁</a></li>
            <li class="breadcrumb-item"><a href="/admin/product-categories">產品類別管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯產品類別</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">產品類別 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('product-categories.update',['id' => $product_categories->id])}}">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">類別名稱</label>
                            <div class="col-sm-10">
                                <input value="{{$product_categories->name}}" type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="new_categories_id" class="col-sm-2 col-form-label">類別</label>
                            <div class="col-sm-10" >
                                <select class="form-select" aria-label="Default select example" name="new_categories_id" id="new_categories_id">
                                    <option value="" hidden>請選擇類別</option>
                                    @foreach($service_categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">編輯</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
