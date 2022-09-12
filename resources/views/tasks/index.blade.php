<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規投稿</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- ①タスク一覧 --}}
    <h1>タスク一覧</h1>
    {{-- register-groupはタイトルと削除ボタンが並列 --}}
    
    <div class = button-group>
        <dl>
            @foreach ($tasks as $task)
                <dt>
                    <!-- // リンク先をidで取得し名前で出力 -->
                    <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
                </dt>
        </dl>
        {{-- <div class="button-group"> --}}
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
            @endforeach
    </div>


    {{-- ②新規論文投稿 --}}
    <div class="test">
        <h1>新規論文投稿</h1>
    </div>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- GET|HEAD,POSTが両方同じ  memosなのでPOSTと宣言 --}}
    <form action="/tasks" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body">{{ old('body') }}</textarea>
        </p>

        {{-- <!-- 編集edit.balde.phpへジャンプする -->
        <button onclick="location.href='/tasks/{task}/edit'">Create Task</button> --}}
        <input type="submit" value="Create task">
    </form>
</body>

</html>
