@extends('layouts.master')

@section('page-title', '預約表')

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
                <th scope="col" style="text-align: left;width: 10%">ID</th>
                <th scope="col" style="text-align: left;width: 15%" >課程名稱</th>
                <th scope="col" style="text-align: left;width: 15%">老師</th>
                <th scope="col" style="text-align: right;width: 15%" >日期</th>
                <th scope="col" style="text-align: right;width: 10%">金額</th>
                <th scope="col" style="text-align: right;width: 10%">功能</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reserves as $reserves)
                <tr>
                    <!--<th scope="col">標題</th>-->
                    <td style="text-align: left">{{$reserves->id}}</td>
                    <td style="text-align: left"></td>
                    <td style="text-align: left;width: 10%"></td>
                    <td style="text-align: right;width: 10%">{{$reserves->date}},{{$reserves->str_time}}-{{$reserves->end_time}}</td>
                    <td style="text-align: right;width: 10%">{{$reserves->pay}}</td>
                    <td style="text-align: right;width: 10%">
                        <a class="btn btn-secondary" href="">修改</a>
                        <form action="" method="POST">
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
    </div>
@endsection
