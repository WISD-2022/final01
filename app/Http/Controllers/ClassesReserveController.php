<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Reserve;
use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClassesReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Reserve::all();
//        join('', 'users.id', '=', 'orders.user_id')
//            ->select('users.email')
//            ->get();
        $data = [
            'users' => $users,
            ];
        // return ('sdsad');
       return view('reserve')->with(['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($class)
    {
        $classes = Classes::where('id',$class)->get();
        $t = Staffs::all();
        //            'order_date' => $orders,
//dd($t);
        $data = [
            'classes'=>$classes,
            't'=>$t
        ];
        return view('reserve.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$class)
    {
       //    dd($request->ter);
        // dd($request->class);
//        dd($class);
        Reserve::create([
            'ter_id'=>$request->ter,
            'user_id'=>Auth::user()->id,
            'class_id'=>$class,
            'date'=>$request->date,
            'str_time'=>$request->str_time,
            'end_time'=>$request->end_time,
        ]);
        $users = Reserve::all();
//        redirect()->route('classes.index')
        return redirect()->route('reserve')->with(['users'=>$users]);
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
    public function destroy(Reserve $reserve)
    {
        //
//        dd($reserve);
        $reserve->delete();
        return redirect()->route('reserve');

    }
}
