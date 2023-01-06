<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Staffs;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('schedules')
                ->join('staffs','staffs.id','=','ter_id')
                ->get();
        return view('admin.layouts.schedules.index', ['schedules' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('staffs')->get();
        return view('admin.layouts.schedules.create', ['schedules' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreScheduleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleRequest $request)
    {
        $ter_id = Staffs::where('name', $request->staffselect)->get();
        Schedule::create([
            'ter_id' => $request->staffselect,
            'week' => $request->week,
            'str_time' => $request->str_time,
            'end_time' => $request->end_time,
        ]);
        return view('admin.layouts.schedules.index');
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
        $data = Schedule::find($schedule);
        return view('admin.layouts.schedules.edit',['schedule' => $data]);
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
            'ter_id' => $request->staffselect,
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
