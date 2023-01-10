@extends('admin.master')
@section('title', '美甲老師編輯')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">老師管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">修改美甲老師</li>
        </ol>

        <form action="{{ route('admin.staffs.update',$staffs[0]->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="from-group">
                <label for="name" class="form-label">老師名字： </label>
                <input id="name" name="name" value="{{old('name',$staffs[0]->staff_name)}}">

                <p></p>
                <label for="introduce" class="form-label">介紹: </label>
                <textarea id="introduce" name="introduce" class="form-control" rows="10">{{old('introduce',$staffs[0]->introduce)}}</textarea>

                <p></p>
                <label for="image" class="form-label">上傳圖檔: </label>
                <div class="form-group">
                    <input type="file" name="image" accept="image/*" value="{{old('img_path',$staffs[0]->img_path)}}">
                </div>
{{--                <input id="img_path" name="img_path" value="{{old('img_path',$staffs[0]->img_path)}}">--}}
                <!--<label action="@{{route('flight.upload')}}" class="form-label">上傳圖片檔案:  </label>
                <form action="@{{route('flight.upload')}}" method="post" enctype="multipart/form-data">
{{--                    @csrf--}}
                <div class="mb-2">
                    <input type="file" name="photo" accept="image/*">
                </div>
                <button class="btn btn-info" type="submit">Save Photo</button>
            </form>-->
            </div>

            <div class="text-right">
                <p></p>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </form>

    </div>
@endsection
