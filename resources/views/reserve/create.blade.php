@extends('layouts.master')

@section('page-title', 'xx')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">課程預約</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">預約</li>
    </ol>
    <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
        @if(count($errors)>0)
            <strong>錯誤！</strong> 請修正以下問題：
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
    <form action="{{route('admin.posts.store')}}" method="post" role="form">
        @method('post')
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">標題</label>
            <input id="title" name="title" type="text" class="form-control" value="{{old('title')}}" placeholder="請輸入文章標題">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">內容</label>
            <textarea id="content" name="content" class="form-control" rows="10" value="{{old('content')}}"></textarea>
        </div>
        <div class="form-group">
            <label for="is_feature" class="form-label">精選？</label>
            <select id="is_feature" name="is_feature" class="form-control">
                <option value="0">否</option>
                <option value="1">是</option>
            </select>
        </div>
        <div class="text-right">
            <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </div>
    </form>
    <!--<form action="{{route('admin.posts.store')}}" method="POST" role="form">
        @method('post')
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">標題：</label>
            <input id="title" name="title" class="form-control" value="{{old('title')}}" placeholder="請輸入文章標題">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">內容：</label>
            <textarea id="content" name="content" class="form-control"
                      rows="10">{{old('content')}}</textarea>
        </div>
        <div class="form-group">
            <label for="is_feature" class="form-label">精選？</label>
            <select id="is_feature" name="is_feature" class="form-control">
                <option value="0">否</option>
                <option value="1">是</option>
            </select>
        </div>
        <div class="text-right">
            <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </div>
    </form>-->
</div>
@endsection
