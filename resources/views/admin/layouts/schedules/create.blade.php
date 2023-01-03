@extends('admin.master')
@section('title', '新增美甲老師排班')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">排班管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">新增美甲老師排班</li>
        </ol>
        <form action="{{ route('admin.staffs.store') }}" method="POST" role="form">
            @csrf
            <div class="from-group">
                <label class="form-label">選擇老師: </label>
                <form  name="staffselect"  method="GET"  action="{{ route('admin.staffs.create') }}">

                    <select  name="staffs">
                        <option value="1">老師1</option>
                        <option value="2">老師2</option>
                    </select>
                </form>
                <p></p>
                <label class="form-label">選擇上班時間: </label>
                <form  name="work"  method="GET"  action="{{ route('admin.staffs.create') }}">

                    <select  name="worktime">
                        <option value="10:00:00">10:00</option>
                        <option value="2">11:00</option>
                    </select>
                </form>

            </div>

            <div class="from-group">
                <p></p>
                <label for="content" class="form-label">介紹: </label>
                <textarea id="introduce" name="introduce" class="form-control" rows="10">輸入介紹</textarea>
            </div>

            <div class="text-right">
                <p></p>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </form>


    </div>
@endsection

