@extends('layouts.app')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">
<style type="text/css">

    .img{
        width: 200px;
        height: 200px;
        background-size: cover;
        background-position: center;
        border: 1px solid #000;
        margin-right: 15px;
        margin-bottom: 15px;
        position: relative;
        display:flex;
        flex-direction: row;
    }
    .delete-btn{
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%,-50%);
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: red;
        color: #FFF;
        font-size: 20px;
        font-weight:600;
        line-height:1;
        display:flex;
        justify-content:center;
        align-items:center;
        cursor: pointer;
    }
</style>
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">首頁</a></li>
            <li class="breadcrumb-item"><a href="/admin/facilities">產品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品-編輯</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">產品 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('products.update',['id' => $products->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">產品名稱</label>
                            <div class="col-sm-10">
                                <input value="{{$products->name}}" type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="description" class="col-sm-2 col-form-label">簡介</label>
                            <div class="col-sm-10">
                                <input value="{{$products->description}}" type="text" class="form-control" id="description" name="description" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="product_category_id" class="col-sm-2 col-form-label">類別</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="product_category_id" id="product_category_id">
                                    <option value="" hidden>請選擇類別</option>
                                    @foreach($product_categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="price" class="col-sm-2 col-form-label">價格</label>
                            <div class="col-sm-10">
                                <input value="{{$products->price}}" type="text" class="form-control" id="price" name="price" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image" class="col-sm-2 col-form-label">目前圖片</label>
                            <div class="col-sm-10">
                                <img src="{{Storage::url($products->image_url)}}" alt="" width="200">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">新增圖片</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image_url" name="image_url" >
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image" class="col-sm-2 col-form-label">其他圖片</label>
                            <div class="col-sm-10 row">
                                @foreach($files as $item)
                                    <div class="img" style="background-image: url({{Storage::url($item->image_url)}})">
                                        <div class="delete-btn" data-id="{{$item->id}}">X</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_urls" class="col-sm-2 col-form-label">新增其他圖片</label>
                            <div class="col-sm-10">
                                <input type="file" multiple accept="image/*" class="form-control" id="image_urls" name="files[]">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
<script>
    //summernote function
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

    //Preview Function
    $("#image_url").change(function(){
        readURL(this);
    });

    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
            $("#preview_image_url").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    const msg = "真的要刪除此文件嗎?";
    let delBtns = document.querySelectorAll('.delete-btn');
        delBtns.forEach(function(delBtn){
            delBtn.addEventListener('click',function(e){
                //獲取要刪除的image id
                if(confirm('你確定要刪除這筆資料嗎?')){
                    let imageId = this.getAttribute('data-id');
                    let formData = new FormData();
                    formData.append('_token','{{csrf_token()}}');
                    formData.append('_method','delete');
                    formData.append('id',imageId);
                    //送出請求
                    let url = '{{route('product.image_delete')}}';
                    fetch(url,{
                        'method' : 'post',
                        'body' : formData
                    }).then(function(response){
                        return response.text();
                    }).then(function(data){
                        if(data = true){
                            e.target.parentElement.remove();
                        }
                })
                }
            })
        }
        )

    </script>
@endsection
