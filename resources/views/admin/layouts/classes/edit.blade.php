@extends('admin.master')
@section('title', '修改課程')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">修改課程</h1>
        <br>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">編輯課程內容</li>
        </ol>
        <form action="{{ route('admin.classes.update',$classes[0]->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="input-group mb-3" style="width: 15rem">
                    <div class="input-group-prepend">
                        <span class="input-group-text">課程名稱</span>
                    </div>
                    <input type="text" class="form-control" name="name"
                           value="{{$classes[0]->class_name}}">
                </div>
                <div class="input-group mb-3" style="width: 50rem;height: 20rem">
                    <div class="input-group-prepend">
                        <span class="input-group-text">課程內容</span>
                    </div>
                    <textarea type="text" class="form-control" name="intro"
                           >{{$classes[0]->intro}}</textarea>
                </div>
                <div class="input-group mb-3" style="width: 10rem">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" placeholder="輸入金額" name="amount"
                           value="{{$classes[0]->amount}}">
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
                <button class="btn btn-success btn-sm" type="submit">確定修改</button>
            </div>
        </form>
    </div>
@endsection
