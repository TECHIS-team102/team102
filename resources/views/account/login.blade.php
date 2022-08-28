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
  <div class="container text-center mt-3">
  <h3 class="text-center mt-5">商品管理システム</h3>
  <main class="mx-auto px-5 col-md-8">
        <form action="/account/auth" method="post">
          @csrf
          <table class="table">
        <tr>
          <td class="font-weight-bold"><label class="label" for="email">メールアドレス</label></td>
          <td><input class="form-control" id="email" type="text" name="email" value="{{old('email')}}"></td>
        </tr>
        <tr>
          <td class="font-weight-bold"><label class="label" for="password">パスワード</label></td>
          <td><input class="form-control" id="password" type="password" name="password" value="{{old('email')}}"></td>
        </tr>
        </table>
          <input type="submit" class="btn btn-secondary mx-auto d-block" value="ログイン">
        </form>
        @if($errors->has('msg')) <span>{{$errors->first('msg')}}</span>@endif
        <a href="/account/form">アカウント未作成の方はこちら</a>
</main>
</div>
</body>

</html>