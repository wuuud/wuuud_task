<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Facade\Ignition\Tabs\Tab;
//バリデーション後
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // モデル名::テーブル全件取得。memosで複数形。
        $tasks = Task::all();
        // memosティレクトリーの中のindexページを指定し、
        //memosの連想配列を代入
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 今回不要。indexに記載。return view('tasks.create');
    }

    //バリデーション後
    public function store(TaskRequest $request)
    {
        // インスタンスの作成
        $task = new Task;

        // 値の用意
        $task->title = $request->title;
        $task->body  = $request->body;

        // インスタンスに値を設定して保存
        $task->save();

        // 登録したらindexに戻る
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task= Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        // インスタンスの作成
        $task = Task::find($id);

        // 値の更新
        $task->title = $request->title;
        $task->body  = $request->body;

        // インスタンスの更新
        $task->save();

        // 更新したらindexに戻る
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //インスタンス生成
    $task = Task::find($id);
    //データの削除
    $task->delete();

    //削除したページには戻れないので、一覧に戻る
    return redirect('/tasks');
    }
}
