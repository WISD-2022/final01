@extends('layouts.master')
@section('title', '老師瀏覽')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">老師瀏覽</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">老師一覽表</li>
        </ol>
        <table class="table">
            <thead>
            <tr>
                <!--<th scope="col">標題</th>-->
                <th scope="col" style="text-align: left;width: 10%">老師名</th>
                <th scope="col" style="text-align: left">介紹</th>
                <th scope="col" style="text-align: left">圖片</th>

            </tr>
            </thead>
            <tbody>
            @foreach($staffs as $staffs)
                <tr>
                    <!--<th scope="col">標題</th>-->
                    <td style="text-align: left">{{$staffs->staff_name}}</td>
                    <td style="text-align: left">{{$staffs->introduce}}</td>
                    <td style="text-align: left;width: 10%"><img src="{{asset('images/'.$staffs->image)}}"></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
