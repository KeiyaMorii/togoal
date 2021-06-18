<?php

namespace App\Http\Controllers;

use App\User;
use App\Todo;
use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use Psy\Context;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // 新しいインスタンスを生成
        $todo = new Todo();
        // ログイン中のユーザーIDを取得
        $todo->user_id = Auth::id();
        // goal_idを取得
        $todo->goal_id = request('goal_id');
        // contentを取得
        $todo->content = request('content');
        // positionを取得
        $todo->position = request('position');
        // 保存する
        $todo->save();
        return view('user.mygoal');
    }


    public function show(Request $request)
    {
        // ログイン中のuser_idのデータ、goal_idが1のデータを取得を取得
        $items = Todo::where('user_id', Auth::id())->where('goal_id', 1)->get();
        // contentの配列を作成
        $content = array("content" => "test");
        // contentを全件取ってきてuser_idのrequest->contentに置き換える
        // foreach ($content as $key) {
            // echo $key;
        // }
        var_dump($content);
        // contentをviewで表示する
        return view('user.mygoal', compact('key'));
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
