<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

<body>

    <form method="POST" action="/reservation">
        @csrf

        <!-- 完了メッセージ -->
        @if (session('result'))
            <div style="color:green;">
                {{ session('result') }}
            </div>
            <br>
        @endif

        <select name="room_id">
            <option></option>
            <option selected value="1">桜</option>
            <option value="2">松</option>
            <option value="3">竹</option>
            <option value="4">梅</option>
        </select>
        <br>
        <br>
        <input type="date" name="start_date" value="2018-10-01">
        <input type="time" name="start_time" value="19:00">
        <br>
        <input type="date" name="end_date" value="2018-10-01">
        <input type="time" name="end_time" value="23:00">
        <br>
        <br>

        <!-- エラー表示 -->
        @if($errors->any())
            <div style="color:red;">
                【エラー】<br><br>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
            <br>
        @endif

        <button type="submit">予約する</button>
    </form>
</body>
</html>
