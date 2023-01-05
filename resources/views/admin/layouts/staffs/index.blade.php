@extends('admin.master')
@section('title', '美甲老師管理')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">老師管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">美甲師一覽表</li>
        </ol>
        <table class="table" id="datatablesSimple">
            <thead>
            <tr>
                <th>姓名</th>
                <th>介紹</th>
                <th>圖片</th>
            </tr>
            </thead>

            <tbody>
            @foreach($staffs as $staffs)
                <tr>
                    <td style="text-align: left">{{$staffs->name}}</td>
                    <td style="text-align: left">{{$staffs->introduce}}</td>
                    <td style="text-align: left">{{$staffs->img_path}}</td>
                    <td style="text-align: right;width: 10%">
                        <a class="btn btn-secondary" href="{{ route('admin.staffs.edit',$staffs->id) }}">修改</a>
                    </td>
                    <td style="text-align: right;width: 10%">
                        <form action="{{ route('admin.staffs.destroy',$staffs->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success btn-sm" href="{{ route('admin.staffs.create') }}">新增美甲老師</a>
    </div>
@endsection
