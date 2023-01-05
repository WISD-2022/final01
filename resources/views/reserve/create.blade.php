@extends('layouts.master')

@section('page-title', '預約表單')

@section('page-content')
        <form action="{{route('classes.reserves.store',$users[0]->id)}} " method="POST">
            @csrf

            <div class="text-right">
                <p>課程名稱:{{$users[0]->name}}</p>
                <br>
                <p>預約日期:</p>
                <input type="date" id="date" name="date" name="trip-start">
                <br>
                <!--時間-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text">開始時段</label>
                    </div>
                    <select class="custom-select" name="str_time">
                        <option selected>9:00</option>
                        <option value="1">10:00</option>
                        <option value="2">11:00</option>
                        <option value="3">12:00</option>
                        <option value="4">1:00</option>
                        <option value="5">2:00</option>
                        <option value="6">3:00</option>
                        <option value="7">4:00</option>
                        <option value="8">5:00</option>
                        <option value="9">6:00</option>

                    </select>
                    <div class="input-group-prepend">
                        <label class="input-group-text">結束時段</label>
                    </div>
                    <select class="custom-select" name="end_time">
                        <option value="1">10:00</option>
                        <option value="2">11:00</option>
                        <option value="3">12:00</option>
                        <option value="4">1:00</option>
                        <option value="5">2:00</option>
                        <option value="6">3:00</option>
                        <option value="7">4:00</option>
                        <option value="8">5:00</option>
                        <option value="9">6:00</option>

                    </select>
                </div>
                <p>指定老師:</p>
                <tbody>
                    <select class="custom-select" name="ter">
                        <option selected>不指定</option>
                        @foreach($t as $key => $t)
                            <option value="{{$t->id}}">{{$t->name}}</option>
                        @endforeach
                    </select>
                </tbody>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </form>
@endsection
