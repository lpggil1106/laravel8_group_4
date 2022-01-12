@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    th{
        text-align:center;
    }

    td{
        text-align:center;
        vertical-align: middle;
    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header pt-2">最新消息管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('news.create')}}" class="btn btn-success">新增消息</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="120">類別</th>
                                <th width="120">標題</th>
                                <th>日期</th>
                                <th width="250">圖片</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)
                                <tr>
                                    <td>{{$item->newsCategories->name}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->date}}</td>
                                    <td><img src="{{Storage::url($item->image_url)}}" alt="" width="200"></td>
                                    <td>
                                        <a href="./news/edit/{{$item->id}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none" action="{{route('news.destroy',['id' => $item->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#my-table').DataTable();
    });

    const deleteElements = document.querySelectorAll('.delete-btn');
    deleteElements.forEach(function(deleteElement){
        deleteElement.addEventListener('click', function(){
            if(confirm('你確定要刪除這筆資料嗎?')){
                this.nextElementSibling.submit();
            }
        })
    })
</script>
@endsection


