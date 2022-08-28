<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@include('parts.header')
    <div class="container">
<h1>一覧画面</h1>
<p><a href="/item/create">新規追加</a></p>
 
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<table border="1">
    <tr>
        <th>商品番号</th></th>
        <th>商品名 </th>
        <th>種別</th>
        <th>編集 </th>
        <th>更新日時</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->id }}</td>        
        <td>{{ $item->name }}</td>
        <td>{{ $type[$item->type] }}</td>
        <th><a href="/item/edit/{{$item->id}}">編集</a></th>
        <td>{{ $item->updated_at}}</td>
    </tr>
    @endforeach
</table>
    </div>
</body>
</html>




