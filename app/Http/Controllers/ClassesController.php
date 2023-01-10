<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            if (Auth::user()->ismember == '0') {
                $data = DB::table('classes')->get();
                return view('admin.layouts.classes.index',['classes' => $data]);
            }
        }
        else{
            $data = DB::table('classes')->get();
            return view('class.index', ['classes' => $data]);
        }
        /*if(Auth::check()) {
            $data = DB::table('classes')->get();
            return view('class.index', ['classes' => $data]);
        }
        else{
            return redirect()->route('index')->with('alert', '請登入!');
        }*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.layouts.classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassesRequest $request)
    {
        Classes::create([
            'class_name'=>$request->class_name,
            'intro'=>$request->intro,
            'amount'=>$request->amount,
            'time'=>$request->time,
        ]);
        return redirect()->route('admin.classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $class
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $class)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classes  $class
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $class)
    {
        $data = Classes::find($class);
        //dd($data);
        return view('admin.layouts.classes.edit',['classes' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassesRequest  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassesRequest $request, Classes $class)
    {
        $data=Classes::find($class);
        $class->update([
            'name'=>$request->class_name,
            'intro'=>$request->intro,
            'amount'=>$request->amount,
            'time'=>$request->time,
        ]);
//
        return redirect()->route('admin.classes.index')->with('alert', '更新成功!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $class)
    {

        $class->delete();
        return redirect()->route('admin.classes.index');
    }
}
