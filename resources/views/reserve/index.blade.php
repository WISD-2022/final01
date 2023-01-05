@extends('layouts.master')

@section('page-title', '預約表')

@section('page-content')
    <div class="container-fluid px-4">

        <h1 class="mt-4">預約紀錄</h1>
        <table class="table">
            <thead>
            <tr>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: left">課程名稱</th>
                <th scope="col" style="text-align: left" >預約日期</th>
                <th scope="col" style="text-align: left">開始時間</th>
                <th scope="col" style="text-align: right" >結束時間</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $users)
                <tr>
                    <!--<th scope="col">標題</th>-->

                    <td style="text-align: left">{{$users->name}}</td>
                    <td style="text-align: left">{{$users->date}}</td>
                    <td style="text-align: left">{{$users->str_time}}</td>
                    <td style="text-align: left">{{$users->end_time}}</td>
                    <td style="text-align: right;width: 10%">

                        <form action="{{ route('reserves.destroy',$users->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger">取消</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
