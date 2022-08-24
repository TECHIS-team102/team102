<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
label, input[type=text]{
 display:block;
}
</style>
</head>
<body>
  <div class="container">
        <form action="/account/auth" method="post">
          @csrf
          <label class="label" for="email">メールアドレス</label>
          <input id="email" type="text" name="email">
          <label class="label" for="password">パスワード</label>
          <input id="password" type="password" name="password">
          <input type="submit">
        </form>
        @if($errors->has('msg')) <span>{{$errors->first('msg')}}</span>@endif
        <a href="/account/form">アカウント未作成の方はこちら</a>

</div>
</body>

</html>