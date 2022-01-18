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
                <h2 class="card-header pt-2">產品管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('products.create')}}" class="btn btn-success">新增產品</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>標題</th>
                                <th width="800">圖片</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td><img src="http://127.0.0.1:8000/storage/{{$item->image_url}}" alt="" width="200"></td>
                                    <td>
                                        <a href="{{route('products.edit', ['id'=>$item->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none" action="{{route('products.destroy', ['id'=>$item->id])}}" method="post">
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


