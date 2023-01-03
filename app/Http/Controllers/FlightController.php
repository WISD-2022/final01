<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function file(){
        return view('file');
    }

    public function upload(Request $request){
        //自訂檔案名稱
        $imageName = time().'.'.$request->photo->extension();
        //把檔案存到公開的資料夾
        $request->photo->move(public_path('images'), $imageName);
        //回到傳送資料來的頁面
        return back();
    }
}
