<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return ('sdsad');
       //return view('class.reserve.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserve.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Staffs::create([
            'name'=>$request->name,
            'introduce'=>$request->introduce,
            'img_path'=>$request->img_path,
        ]);
        /*if($request->has('image')) {
            //影像圖檔-自訂檔案名稱
            $imageName = $request->id.'_'.time().'.'.$request->img_path->extension();
            //把檔案存到公開的資料夾
            $file_path = $request->image->move(public_path('images'), $imageName);

        }*/
        return view('admin.layouts.staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
