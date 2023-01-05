@extends('admin.master')
@section('title', '美甲老師管理')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">老師管理</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                所有美甲老師
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
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
                                <form action="{{ route('admin.staffs.edit',$staffs->id) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-secondary">修改</button>
                                </form></td>
                            <td style="text-align: right;width: 10%">
                                <form action="{{ route('admin.staffs.destroy',$staffs->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button class="btn btn-danger">刪除</button>
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a class="btn btn-success btn-sm" href="{{ route('admin.staffs.create') }}">新增美甲老師</a>
            </div>
        </div>
    </div>
@endsection
