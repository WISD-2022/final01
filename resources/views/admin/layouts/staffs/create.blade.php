@extends('admin.master')
@section('title', '新增美甲老師')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">老師管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">新增美甲老師</li>
        </ol>
        <form action="{{ route('admin.staffs.store') }}" method="POST">
            @csrf
            <div class="from-group">
                <label for="title" class="form-label">老師名字： </label>
                <input id="name" name="name" placeholder="請輸入姓名">

                <p></p>
                <label for="content" class="form-label">介紹: </label>
                <textarea id="introduce" name="introduce" class="form-control" rows="10" placeholder="請輸入介紹"></textarea>

                <p></p>
                <label for="content" class="form-label">上傳圖檔: </label>
                <div class="form-group">
                    <input type="file" name="image" accept="image/*">
                </div>
            </div>

            <div class="text-right">
                <p></p>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </form>
    </div>
@endsection

