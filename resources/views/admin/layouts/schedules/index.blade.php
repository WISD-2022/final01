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
                    <tbody>
                    @foreach($schedules as $key=>$schedule)
                        <tr>
                            <td style="text-align: left">{{$schedule->staff_name}}</td>
                            <td style="text-align: left">{{$schedule->week}}</td>
                            <td style="text-align: left">{{$schedule->str_time}}</td>
                            <td style="text-align: left">{{$schedule->end_time}}</td>
                            <td style="text-align: right;width: 10%">
                                <a class="btn btn-secondary" href="{{ route('admin.schedules.edit',$schedules_sid[$key]->id) }}">修改</a>
                            </td>
                            <td style="text-align: right;width: 10%">
                                <form action="{{ route('admin.schedules.destroy',$schedules_sid[$key]->id) }}" method="POST">
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
                <a class="btn btn-success btn-sm" href="{{ route('admin.schedules.create') }}">新增排班</a>
            </div>
@endsection
