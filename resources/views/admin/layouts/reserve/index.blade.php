@extends('admin.master')

@section('title', '預約表')

@section('page-content')
    <div class="container-fluid px-4">

        <h1 class="mt-4">預約紀錄</h1>
        <table class="table">
            <thead>
            <tr>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: left;width: 10%">ID</th>
                <th scope="col" style="text-align: left;width: 15%" >課程名稱</th>
                <th scope="col" style="text-align: left;width: 15%">老師</th>
                <th scope="col" style="text-align: right;width: 15%" >日期</th>
                <th scope="col" style="text-align: right;width: 10%">功能</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reserves as $reserves)
                <tr>
                    <!--<th scope="col">標題</th>-->
                    <td style="text-align: left">{{$reserves->id}}</td>
                    <td style="text-align: left">{{$reserves->class_name}}</td>
                    <td style="text-align: left;width: 10%">{{$reserves->name}}</td>
                    <td style="text-align: right;width: 10%">{{$reserves->date}},{{$reserves->str_time}}</td>
                    <td style="text-align: right;width: 10%">
                        <a class="btn btn-secondary" href="">修改</a>
                        <form action="" method="POST">
                            @method('DELETE')
                            @csrf
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
