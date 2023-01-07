<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Http\Requests\StoreReserveRequest;
use App\Http\Requests\UpdateReserveRequest;
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

        $data = DB::table('reserves')->get();
        return view('reserve.index',['reserves' => $data]);
    }

    public function admin_index()
    {
        $data = DB::table('reserves')
            ->join('staffs','staffs.id','=','ter_id')
            ->join('classes','classes.id','=','class_id')
            ->get();
        return view('admin.layouts.reserve.index',['reserves'=>$data]);
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
        //
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
        //
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
