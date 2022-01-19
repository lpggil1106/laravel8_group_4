@extends('layouts.app')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">首頁</a></li>
            <li class="breadcrumb-item"><a href="/admin/facilities">產品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增產品</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">產品 - 新增</h2>
                <div class="card-body">
                    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">產品名稱</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="product_categories_id" class="col-sm-2 col-form-label">類別</label>
                            <div class="col-sm-10" >
                                <select class="form-select" aria-label="Default select example" name="product_categories_id" id="product_categories_id">
                                    <option value="" hidden>請選擇類別</option>
                                    @foreach($product_categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="content" class="col-sm-2 col-form-label">課程簡介</label>
                            <div class="col-sm-10" >
                                <textarea class="form-control" name="content" id="content" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="block1" class="col-sm-2 col-form-label">區塊一</label>
                            <div class="col-sm-10" >
                                <textarea class="form-control" name="block1" id="block1" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="block2" class="col-sm-2 col-form-label">區塊二</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="block2" id="block2" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="block3" class="col-sm-2 col-form-label">區塊三</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="block3" id="block3" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="price" class="col-sm-2 col-form-label">價格</label>
                            <div class="col-sm-10" >
                                <textarea class="form-control" name="price" id="price" rows="1" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">主要圖片</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image_url" name="image_url" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_urls" class="col-sm-2 col-form-label">其他圖片</label>
                            <div class="col-sm-10">
                                <input type="file" multiple accept="image/*" class="form-control" id="image_urls" name="files[]" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 120,
        });
        $('#block1').summernote({
            height: 120,
        });
        $('#block2').summernote({
            height: 120,
        });
        $('#block3').summernote({
            height: 120,
        });
    });

</script>

<script>

    </script>
@endsection
