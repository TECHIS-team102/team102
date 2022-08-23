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
    <p><a href="/item">一覧画面</a></p>
     
    <form action="/item/create" method="POST">
        @csrf
        <p>商品名：<input type="text" name="name" value="{{old('name')}}"></p>
        <span>{{$errors->first('name')}}</span>
        <P>商品種別:
        <select name="type">
         <option value=""></option>
         @foreach($type as $key=>$val)
         <option value="{{$key}}" {{old('type')==$key ? "selected" : ""}}>{{$val}}</option>
         @endforeach
         </select>
        </P>
        <span>{{$errors->first('type')}}</span>
        <p>詳細：<textarea name="detail" cols="30" rows="10">{{old('detail')}}</textarea>
        <span>{{$errors->first('detail')}}</span>
       <!-- <P> <input type="radio" name="status" value="1">有効
        <input type="radio" name="status" value="2">無効
        </P> -->
        <input type="submit" value="登録する">
    </form>   
</body>
</html>