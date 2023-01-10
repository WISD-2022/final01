@extends('admin.master')
@section('title', '預約表狀態編輯')
@section('page-content')
    <div class="container-fluid px-4">
        <h3 class="mt-4">預約紀錄-狀態變更</h3>
        <form action="{{route('admin.reserves.update',$id[0]->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="from-group">
                <label class="form-label">顧客姓名： {{$reserves[0]->name}}</label><br>
                <label class="form-label">預約日期 時間： {{$reserves[0]->date}}, {{$reserves[0]->str_time}}</label><br>
                <label for="status" class="form-label">變更狀態： </label>
                <select id="wml" name="wml">
                    <option value="未完成">未完成</option>
                    <option value="已完成">已完成</option>
                </select><br>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </form>
    </div>
@endsection
