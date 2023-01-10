@extends('layouts.master')

@section('title', '預約表單')

@section('page-content')
    <form action="{{route('classes.reserves.store',$classes[0]->id)}} " method="POST">
        @csrf

        <div class="text-right">
            <p>課程名稱: {{$classes[0]->class_name}}</p>
            <p>金額: {{$classes[0]->amount}}</p>
            <label for='date' class="form-label">預約日期: </label>
            <input type="date" id="date" name="date">
            <br>
            <!--時間-->
            <label for='str_time' class="form-label">預約時間: </label>
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
            <label for='ter' class="form-label">指定老師: </label>
            <select class="custom-select" id="ter" name="ter">
                <option value="999999999">不指定</option>
                @foreach($t as $key => $t)
                    <option value="{{$t->id}}">{{$t->staff_name}}</option>
                @endforeach
            </select>
            <p>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </p>
        </div>
    </form>
@endsection
