@extends('admin.master')

@section('title', '預約表')

@section('page-content')
    <div class="container-fluid px-4">

        <h1 class="mt-4">預約紀錄</h1>
        <table class="table">
            <thead>
            <tr>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: center;width: 10%">顧客姓名</th>
                <th scope="col" style="text-align: center;width: 15%" >課程名稱</th>
                <th scope="col" style="text-align: center;width: 15%">老師</th>
                <th scope="col" style="text-align: center;width: 15%" >日期</th>
                <th scope="col" style="text-align: center;width: 15%" >狀態</th>
                <th scope="col" style="text-align: center;width: 10%">功能</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reserves as $reserves)
                <tr>
                    <!--<th scope="col">標題</th>-->
                    <td style="text-align: center">{{$reserves->name}}</td>
                    <td style="text-align: center">{{$reserves->class_name}}</td>
                    <td style="text-align: center;width: 10%">{{$reserves->staff_name}}</td>
                    <td style="text-align: center;width: 10%">{{$reserves->date}},{{$reserves->str_time}}</td>
                    <td style="text-align: center;width: 10%">{{$reserves->status}}</td>
                    <td style="text-align: center;width: 10%">
                        <a class="btn btn-secondary" href="">修改</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
