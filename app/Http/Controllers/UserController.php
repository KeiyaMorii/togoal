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
        // dump($todo);
        // ログイン中のユーザーIDを取得
        $todo->user_id = Auth::id();
        // dump($todo->user_id);
        // goal_idを取得
        $todo->goal_id = request('goal_id');
        // contentを取得
        $todo->content = request('content');
        // echo($todo->content);
        // positionを取得
        $todo->position = request('position');
        // 保存する
        $todo->save();
        return redirect('user/mygoal');
    }


    public function show(Request $request)
    {
        // ログイン中のuser_idのデータ、goal_idが1のデータを取得を取得
        $items = Todo::where('user_id', Auth::id())->where('goal_id', 1)->get();
        // contentの配列を作成
        // $contents = array(
            // "1" => array("content" => 'test',"limit" => "2021/8/30","done" => true),
            // "2" => array("content" => 'sora',"limit" => "2021/9/10","done" => false),
            // "3" => array("content" => 'kumo',"limit" => "2021/9/16","done" => true),
            // "4" => array("content" => 'yuki',"limit" => "2021/9/25","done" => false),
            // "5" => array("content" => 'tuti',"limit" => "2021/10/8","done" => true),
            // "6" => array("content" => 'ki',"limit" => "2021/10/18","done" => false),
            // "7" => array("content" => 'utyuu',"limit" => "2021/10/31","done" => true),
            // "8" => array("content" => 'ame',"limit" => "2021/11/30","done" => false),
            // "9" => array("content" => 'hare',"limit" => "2021/12/25","done" => true),
            // "10" => array("content" => 'kaze',"limit" => "2021/1/26","done" => false)
        // );
        $newItems = array();
        foreach ($items as $key => $value) {
                $newItems[$value->position] = array(
                    "content" => $value->content,
                    "limit" => $value->limit,
                    "done" => $value->done
                );
        }
        // $items = $newItems;
        // dump($items);
        return view('user.mygoal', ['items'=>$newItems]);
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
