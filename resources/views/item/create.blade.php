<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>新規作成画面</h1>
    <p><a href="{{ route('item')}}">一覧画面</a></p>
     
    <form action="{{ route('create')}}" method="POST">
        @csrf
        <p>商品名：<input type="text" name="title" value="{{old('title')}}"></p>
        <p>詳細：<input type="text" name="detail" value="{{old('detail')}}"></p>
        <input type="submit" value="登録する">
    </form>   
</body>
</html>