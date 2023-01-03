@extends('admin.master')
@section('title', 'Dashboard')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">課程介紹</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">課程一覽表</li>
        </ol>
        <div class="alert alert-success alert-dismissible" role="alert" id="liveAlert">
            <strong>完成！</strong> 預約成功
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: left">課程</th>
                <th scope="col" style="text-align: left">內容</th>
                <th scope="col" style="text-align: right">金額</th>
                <th scope="col">功能</th>
            </tr>
            </thead>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('admin.classes.create') }}">新增</a>
        </div>
    </div>
@endsection
