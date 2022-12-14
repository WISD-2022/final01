<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Http\Requests\StoreReserveRequest;
use App\Http\Requests\UpdateReserveRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Classes;
use App\Models\Staffs;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){
        $data = DB::table('reserves')->get();
        return view('reserve.index',['reserves' => $data]);
        }
    }

    public function admin_index()
    {
        if (Auth::check()) {
            if (Auth::user()->ismember == '0') {
                $data = DB::table('reserves')
                    ->join('staffs','staffs.id','=','ter_id')
                    ->join('classes','classes.id','=','class_id')
                    ->join('users','users.id','=','user_id')
                    ->get();
                $data2 = DB::table('reserves')->get();
                return view('admin.layouts.reserve.index',['reserves'=>$data,'reserves_id'=>$data2]);
            } else {
                return redirect()->route('index')->with('alert', '請登入管理者帳號!');
            }
        } else {
            return redirect()->route('index')->with('alert', '請登入管理者帳號!');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserves.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReserveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReserveRequest $request)
    {
        //$pay = Classes::find('amount');
        Reserve::create([
            'date'=>$request->date,
            'str_time'=>$request->str_time,
            //'pay'=> $pay,
        ]);
        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserve $reserve)
    {
        $data = DB::table('reserves')
            ->where('reserves.id',$reserve->id)
            ->join('users','users.id','=','user_id')
            ->get();
        $data2 = DB::table('reserves')
            ->where('reserves.id',$reserve->id)
            ->get();
        return view('admin.layouts.reserve.edit',['reserves' => $data,'id'=>$data2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReserveRequest  $request
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReserveRequest $request, Reserve $reserve)
    {
        $reserve->update([
            'status'=> $request->wml
        ]);
        return redirect()->route('admin.reserves.index')->with('alert','更新成功!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserve $reserve)
    {
       //
    }
}
