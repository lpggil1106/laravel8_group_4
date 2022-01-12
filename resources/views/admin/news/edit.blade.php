@extends('layouts.app')
@section('css')

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">首頁</a></li>
            <li class="breadcrumb-item"><a href="/admin/news">最新消息管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯消息</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">最新消息 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('news.update',['id' => $news->id])}}">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="title" class="col-sm-2 col-form-label">標題</label>
                            <div class="col-sm-10">
                                <input value="{{$news->title}}" type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="new_categories_id" class="col-sm-2 col-form-label">類別</label>
                            <div class="col-sm-10" >
                                <select class="form-select" aria-label="Default select example" name="new_categories_id" id="new_categories_id">
                                    <option value="{{$news->news_categories_id}}" hidden>請選擇類別</option>
                                    @foreach($news_categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="date" class="col-sm-2 col-form-label">日期</label>
                            <div class="col-sm-10">
                                <input value="{{$news->date}}" type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">目前圖片</label>
                            <div class="col-sm-10">
                                <img src="{{Storage::url($item->image_url)}}" alt="" width="200">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">圖片</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image_url" name="image_url" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="content" class="col-sm-2 col-form-label">內容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content" rows="5" required>{{$news->content}}</textarea>
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
