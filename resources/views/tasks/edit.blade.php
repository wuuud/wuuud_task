<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
   
    <h1>投稿論文編集</h1>
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

    <!-- 更新先はmemosのidにしないと増える
    php artisan rote:listで確認① -->
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label>
            <br>
            <input type="text" name="title"
                    value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="bod">{{ old('body', $task->body) }}</textarea>
        </p>

        <div class="button-group">
            <button onclick="location.href='/tasks'">更新</button>
            <!-- $memoのidを元に編集ページへ遷移する -->
            <button onclick="location.href='/tasks/{{ $task->id }}'">詳細に戻る</button>
        </div>
    </form>
</body>

</html>
