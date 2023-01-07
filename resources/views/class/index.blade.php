@extends('layouts.master')
@section('title', '課程瀏覽')
@section('page-content')
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
    <div class="container-fluid px-4">
        <h1 class="mt-4">課程瀏覽</h1>
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
                        <form action="{{ route('classes.reserves.create',$classes->id) }}" method="GET">
                            @csrf
                            <button class="btn btn-secondary">預約</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
