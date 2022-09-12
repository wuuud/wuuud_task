<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク詳細</h1>
    <p>[タイトル]</p>
    <p>{{ $task->title }}</p>
    <p>[内容]</p>
    <p>{{ $task->body }}</p>

    {{-- ①編集用
    {{-- < -- $memoのidを元に編集ページへ遷移する -->
    <button onclick="location.href='/tasks/{{ $memo->id }}/edit'">編集する</button> --}}
    
    {{-- ②削除用 --}} 
    <div class="button-group">
        <button onclick="location.href='/tasks'">一覧へ戻る</button>
        <!-- $memoのidを元に編集ページへ遷移する -->
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
    
</body>
</html>
