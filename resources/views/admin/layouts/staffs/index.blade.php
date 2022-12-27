@extends('admin.master')
@section('title', '美甲老師管理')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">老師管理</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                所有美甲老師
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Introduce</th>
                        <th>Image</th>
                    </tr>
                    </thead>
            </tbody>
        </table>
                <a class="btn btn-success btn-sm" href="{{ route('staffs.create') }}">新增美甲老師</a>
    </div>
@endsection
