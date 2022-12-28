<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use App\Http\Requests\StoreStaffsRequest;
use App\Http\Requests\UpdateStaffsRequest;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.staffs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.layouts.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffsRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',//檢驗的規則
            'introduce'=> 'required'
        ]);
        Staffs::create($request->all());
        return redirect(route('staffs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function show(Staffs $staffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffs $staffs)
    {
        $data = [
            'staffs'=>$staffs,
        ];
        return view('admin.layouts.staffs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffsRequest  $request
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffsRequest $request, Staffs $staffs)
    {
        $staffs->update($request->all());
        return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
        $staffs->delete();
        return redirect()->route('staffs.index');
    }
}
