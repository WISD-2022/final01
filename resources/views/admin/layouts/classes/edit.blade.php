@extends('admin.master')
@section('title', '修改課程')
@section('page-content')
    <div class="container-fluid px-4" >
        <h1 class="mt-4">新增課程</h1>
        <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">請輸入課程內容</li>
            </ol>
        <form action="{{ route('admin.classes.update') }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <p>課程名稱</p>
                <input class="dataTable-input" style="width: 20%" name="name" value="{{old('name',$classes->name)}}">
                <br>
                <p>課程介紹</p>
                <textarea class="dataTable-input" style="width: 50%" name="intro">{{old('intro',$classes->intro)}}</textarea>
                <br>
                <p>金額</p>
                <div class="input-group mb-3" style="width: 10%">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="輸入金額" name="amount" value="{{old('amount',$classes->amount)}}">
                </div>
                <br>
                <!--時間-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text">課程時間</label>
                    </div>
                    <select class="custom-select" name="time">
                        <option selected>00:30:00</option>
                        <option value="1">01:00:00</option>
                        <option value="2">02:00:00</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" type="submit">確定新增</button>
            </div>
        </form>
    </div>
@endsection
