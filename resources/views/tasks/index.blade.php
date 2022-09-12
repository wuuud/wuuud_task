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
        {{-- register-groupはタイトルと削除ボタンが並列 --}}
        <div class="register-group"> 
            <p>{{ $tasks->title }}</p>
                <ul>
                @foreach ($tasks as $task)
                <!-- // リンク先をidで取得し名前で出力 -->
                    <li>
                        <a href="/tasks/{{ $task->id }}">
                        {{ $task->title }}
                        </a>
                    </li>
                @endforeach
                </ul>
            {{-- <div class="button-group"> --}}
            <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
            </form>
            {{-- </div> --}}
        </div>
    </body>

    </html>
