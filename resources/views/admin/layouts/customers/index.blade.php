@extends('admin.master')
@section('title', '顧客資料')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">顧客資料</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" style="text-align: left;width: 10%">ID</th>
                <th scope="col" style="text-align: left;width: 15%">姓名</th>
                <th scope="col" style="text-align: left;width: 15%">email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customers)
                <tr>
                    <td style="text-align: left">{{$customers->id}}</td>
                    <td style="text-align: left">{{$customers->name}}</td>
                    <td style="text-align: left;width: 10%">{{$customers->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection
