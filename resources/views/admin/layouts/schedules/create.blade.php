@extends('admin.master')
@section('title', '新增美甲老師排班')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">排班管理</h1>
        <br>
        <form action="{{ route('admin.schedules.store') }}" method="POST">
            @csrf
            <div class="from-group">
                {{--                @dd($schedules[0]->id)--}}
                <label for='staffselect' class="form-label">選擇老師: </label>
                <select id='staffselect' name="staffselect">
                    @foreach($schedules as $key=>$schedule)
                        <!--$key 表示$schedule 陣列索引-->
                        <option value="{{$schedule->id}}">{{$schedule->name}}</option>
                    @endforeach
                </select>
                <br>
                <label for='week' class="form-label">選擇星期: </label>
                <select id="week" name="week">
                    <option value="一">一</option>
                    <option value="二">二</option>
                    <option value="三">三</option>
                    <option value="四">四</option>
                    <option value="五">五</option>
                    <option value="六">六</option>
                    <option value="日">日</option>
                </select>
                <br>
                <label for='str_time' class="form-label">選擇上班時間: </label>
                <select id="str_time" name="str_time">
                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="12:00:00">12:00</option>
                    <option value="13:00:00">13:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="18:00:00">18:00</option>
                    <option value="19:00:00">19:00</option>
                    <option value="20:00:00">20:00</option>
                    <option value="21:00:00">21:00</option>
                </select>
                <br>
                <label for="end_time" class="form-label">選擇下班時間: </label>
                <select id="end_time" name="end_time">
                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="12:00:00">12:00</option>
                    <option value="13:00:00">13:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="18:00:00">18:00</option>
                    <option value="19:00:00">19:00</option>
                    <option value="20:00:00">20:00</option>
                    <option value="21:00:00">21:00</option>
                </select>

            </div>
            <p></p>
            <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </form>
    </div>
@endsection

