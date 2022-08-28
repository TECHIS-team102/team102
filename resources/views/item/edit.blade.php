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
<h1 class="center-block">編集画面（管理）</h1>
<p><a href="/item">一覧画面</a></p>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<P>商品番号：{{$item->id}}
</P> 
<form action="/item/update" method="POST">
        @csrf
        <p>商品名：<input type="text" name="name" value="{{old('name', $item->name)}}"></p>
        <span>{{$errors->first('name')}}</span>
        <P>商品種別:
            
        <select name="type">
         <option value=""></option>
         @foreach($type as $key=>$val)
         <option value="{{$key}}" {{old('type',$item->type)==$key ? "selected" : ""}}>{{$val}}</option>
         @endforeach
         </select>
        </P>
        <span>{{$errors->first('type')}}</span>
        <p>詳細：
            <textarea name="detail" cols="50" rows="1">{{old('detail', $item->detail )}}</textarea>
        <span>{{$errors->first('detail')}}</span>
       <!-- <P> <input type="radio" name="status" value="1">有効
        <input type="radio" name="status" value="2">無効
        </P> -->
        <input type="submit" value="登録する">
        <input type="hidden" name="id" value="{{$item->id}}">

    </form>   

</body>
</html>