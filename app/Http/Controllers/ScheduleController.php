<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Staffs;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->ismember == '0') {
                $data = DB::table('schedules')
                    ->join('staffs','staffs.id','=','ter_id')
                    ->get();
                $schedules_sid = DB::table('schedules')->get();
                return view('admin.layouts.schedules.index', ['schedules' => $data,'schedules_sid' => $schedules_sid]);
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
        if (Auth::check()) {
            if (Auth::user()->ismenber == '0') {
                $data = DB::table('staffs')->get();
                return view('admin.layouts.schedules.create', ['schedules' => $data]);
            } else {
                return redirect()->route('index')->with('alert', '請登入管理者帳號!');
            }
        } else {
            return redirect()->route('index')->with('alert', '請登入管理者帳號!');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreScheduleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleRequest $request)
    {
        $ter_id = Staffs::where('staff_name', $request->staffselect)->get();
        Schedule::create([
            'ter_id' => $request->staffselect,
            'week' => $request->week,
            'str_time' => $request->str_time,
            'end_time' => $request->end_time,
        ]);
        return redirect()->route('admin.schedules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Schedule $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Schedule $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {

        if (Auth::check()) {
            if (Auth::user()->ismember == '0') {
                $id = Schedule::find($schedule);
                $data = DB::table('staffs')->get();
                return view('admin.layouts.schedules.edit',['schedules' => $data,'id'=>$id]);
            } else {
                return redirect()->route('index')->with('alert', '請登入管理者帳號!');
            }
        } else {
            return redirect()->route('index')->with('alert', '請登入管理者帳號!');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateScheduleRequest $request
     * @param \App\Models\Schedule $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $data = Staffs::find($schedule);
        $schedule->update([
            'ter_id' => $request->ter_id,
            'week' => $request->week,
            'str_time' => $request->str_time,
            'end_time' => $request->end_time,
        ]);
        return redirect()->route('admin.schedules.index')->with('alert','更新成功!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Schedule $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('admin.schedules.index');
    }
}
