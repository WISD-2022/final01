@extends('layouts.master')

@section('page-title', '預約表單')

@section('page-content')
    <form action="{{ route('reserve.store') }}" method="POST">
        @csrf
        <div class="from-group">
            <label for="title" class="form-label">老師名字： </label>
            <input id="name" name="name" placeholder="請輸入姓名">

            <p></p>
            <label for="content" class="form-label">介紹: </label>
            <textarea id="introduce" name="introduce" class="form-control" rows="10" placeholder="請輸入介紹"></textarea>

            <p></p>
            <label for="content" class="form-label">上傳圖檔: </label>
            <input id="img_path" name="img_path" placeholder="假裝圖檔路徑">
            <!--<label action="@{{route('flight.upload')}}" class="form-label">上傳圖片檔案:  </label>
                <form action="@{{route('flight.upload')}}" method="post" enctype="multipart/form-data">
                    @csrf
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
@endsection
