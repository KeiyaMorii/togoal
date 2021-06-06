<?php

namespace App\Http\Controllers;

use App\User;
use App\Todo;
use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/page');
    }

    public function post(Request $request)
    {
        // $items = DB::table('todos')->find($request->input);
        // return view('user.mygoal', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $param = ['position' => $request->position];
        // return redirect('user/mygoal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->position = request('position');
        $todo->save();
        return view('user.mygoal');
    }

    public function show(Request $request)
    {
        $item = Todo::where('position', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('user.mygoal',$param);
    }

    public function goal(Request $request)
    {
        return view('user/mygoal2');
    }

    public function goal2(Request $request)
    {
        return view('user/mygoal3');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function info(User $user)
    {
        return view('user/info');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return view('user/pass');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
