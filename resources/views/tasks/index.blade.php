    
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
    <h1>タスク一覧</h1>
    p class="taskkline"
    <ul>
        @foreach ($memos as $memo)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li>
                <a href="/memos/{{ $memo->id }}">
                    {{ $memo->title }}
                </a>
        </li>
        @endforeach        
    </ul>
    <!-- 新規登録画面へジャンプする -->
    <button onclick="location.href='/memos/create'">登録する</button>

    <h1>新規論文投稿</h1>
</body>
</html>
