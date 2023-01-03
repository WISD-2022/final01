@extends('admin.master')
@section('title', '新增美甲老師排班')
@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">排班管理</h1>
        <br>
        <form action="{{ route('admin.schedules.store') }}" method="POST" role="form">
            @csrf
            <div class="from-group">
                <label class="form-label">選擇老師: </label>
                <form  name="staffselect"  method="GET">

                    <select  name="staffs">
                        <option value="1">老師1</option>
                        <option value="2">老師2</option>
                    </select>
                </form>
                <p></p>
                <label class="form-label">選擇上班時間: </label>
                <form  name="str_time"  method="GET">
                    <select  name="str_time">
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
                </form>
                <br>
                <label class="form-label">選擇下班時間: </label>
                <form  name="end_time"  method="GET">
                    <select  name="end_time">
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
                </form>

            </div>
                <p></p>
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </form>
    </div>
        </form>


    </div>
@endsection

