@extends('admin.master')
@section('title', '美甲老師排班')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">工作時間</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>老師姓名</th>
                        <th>星期</th>
                        <th>上班時間</th>
                        <th>下班時間</th>
                    </tr>
                    </thead>
            </tbody>
        </table>
                <a class="btn btn-success btn-sm" href="{{ route('admin.schedules.create') }}">新增排班</a>
    </div>
@endsection
