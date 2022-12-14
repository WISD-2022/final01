<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Reserve;
use App\Models\Staffs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use Carbon\Carbon;


class ClassesReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            $user_id=Auth::user()->id;
            $id = DB::table('reserves')->where('user_id',$user_id)->get();
            $users = DB::table('reserves')->where('user_id',$user_id)
                ->join('staffs','staffs.id','=','ter_id')
                ->join('classes','classes.id','=','class_id')
                ->get();
            return view('reserve')->with(['users'=>$users,'id'=>$id]);
        }
        else{
            return redirect()->route('login')->with('alert', '請登入!');
        }
        //$users = Reserve::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($class)
    {
        if(Auth::check()) {
            $classes = Classes::where('id',$class)->get();
            $t = Staffs::all();
            $data = [
                'classes'=>$classes,
                't'=>$t
            ];
            return view('reserve.create',$data);
        }
        else{
            return redirect()->route('login')->with('alert', '請登入!');
        }

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
//            'end_time'=>$request->end_time,
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
