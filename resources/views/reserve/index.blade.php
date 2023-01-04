@extends('layouts.master')

@section('page-title', '預約表')

@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">預約紀錄</h1>
        <table class="table">
            <thead>
            <tr>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: left;width: 10%">課程</th>
                <th scope="col" style="text-align: left">預約日期</th>
                <th scope="col" style="text-align: left">預約時段</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$users)
                <tr>
                    <!--<th scope="col">標題</th>-->
                    <td style="text-align: left">{{$users->name}}</td>
                    <td style="text-align: left">{{$users->date}}</td>
                    <td style="text-align: left;width: 10%">{{$users->str_time}}</td>
                    <td style="text-align: left;width: 10%">{{$users->end_time}}</td>
                    <td style="text-align: right;width: 10%">
                        <form action="{{ route('myreserves.reserve.destroy',$users->id) }}" method="POST">
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
