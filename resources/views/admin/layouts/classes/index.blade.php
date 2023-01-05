@extends('admin.master')
@section('title', '課程管理')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">課程管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">課程一覽表</li>
        </ol>
        <table class="table">
            <thead>
            <tr>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: left;width: 10%">課程</th>
                <th scope="col" style="text-align: left">內容</th>
                <th scope="col" style="text-align: left">時間</th>
                <th scope="col" style="text-align: right;width: 10%" >金額</th>
                <th scope="col" style="text-align: right;width: 10%">功能</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classes as $classes)
                <tr>
                    <!--<th scope="col">標題</th>-->
                    <td style="text-align: left">{{$classes->class_name}}</td>
                    <td style="text-align: left">{{$classes->intro}}</td>
                    <td style="text-align: left;width: 10%">{{$classes->time}}</td>
                    <td style="text-align: right;width: 10%">$NT.{{$classes->amount}}</td>
                    <td style="text-align: right;width: 10%">
                            <a class="btn btn-secondary" href="{{ route('admin.classes.edit',$classes->id) }}">修改</a>
                        <form action="{{ route('admin.classes.destroy',$classes->id) }}" method="POST">
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" style="" href="{{ route('admin.classes.create') }}">新增課程</a>
        </div>
    </div>
@endsection
