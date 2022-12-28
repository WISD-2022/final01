@extends('admin.master')
@section('page-title', 'Dashboard')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">課程管理</h1>
        <!--<ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">主控台</li>
        </ol>-->
        <!-- 今日預約的表格 -->
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            所有課程
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>課程名稱</th>
                    <th>課程內容</th>
                    <th>金額</th>
                    <th>操作</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>
                        <a class="btn btn-secondary" href="">修改</a>
                        <a class="btn btn-danger" href="">刪除</a>
                    </td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>
                        <a class="btn btn-secondary" href="">修改</a>
                        <a class="btn btn-danger" href="">刪除</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
