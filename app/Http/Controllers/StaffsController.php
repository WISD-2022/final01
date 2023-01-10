<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use App\Models\Image;
use App\Http\Requests\StoreStaffsRequest;
use App\Http\Requests\UpdateStaffsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('images')->join('staffs', 'staffs.id', '=', 'ter_id')->get();
        return view('staffs.index', ['staffs' => $data]);
    }

    public function admin_index()
    {
        if (Auth::check()) {
            if (Auth::user()->ismember == '0') {
                $data = DB::table('images')->join('staffs', 'staffs.id', '=', 'ter_id')->get();
                return view('admin.layouts.staffs.index', ['staffs' => $data]);
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
        return view('admin.layouts.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreStaffsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffsRequest $request)
    {
        Staffs::create([
            'staff_name' => $request->name,
            'introduce' => $request->introduce,
        ]);
        if ($request->has('image')) {
            //影像圖檔-自訂檔案名稱
            $imageName = $request->name . '_' . time() . '.' . $request->image->extension();
            //把檔案存到公開的資料夾
            $file_path = $request->image->move(public_path('images'), $imageName);
            $id = DB::table('staffs')->where('staff_name', $request->name)->get();
            Image::create([
                'image' => $imageName,
                'ter_id' => $id[0]->id
            ]);
        }
        return redirect()->route('admin.staffs.index');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Staffs $staffs
     * @return \Illuminate\Http\Response
     */
    public function show(Staffs $staffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Staffs $staffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffs $staffs)
    {
        $data = Staffs::find($staffs);
        return view('admin.layouts.staffs.edit', ['staffs' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateStaffsRequest $request
     * @param \App\Models\Staffs $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffsRequest $request, Staffs $staffs) //$staffs 對應到路由{$staffs}
    {
        $data = Staffs::find($staffs);
        $staffs->update([
            'staff_name' => $request->name,
            'introduce' => $request->introduce,
            'img_path' => $request->image,
        ]);
        return redirect()->route('admin.staffs.index')->with('alert', '更新成功!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Staffs $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
        $staffs->delete();
        return redirect()->route('admin.staffs.index');
    }
}
