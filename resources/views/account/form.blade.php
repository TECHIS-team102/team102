<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ユーザー登録画面</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="container-sm">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
  <h3 class="text-center mt-3">新規ユーザー登録</h3>
  <main class="mx-auto px-5 col-md-8">
  <form action="/account/register" method="post">
    @csrf
  <table class="table">
    <tr>
  <td class="font-weight-bold">氏名</td>
  <td><input class="form-control" type="text" name="name" value="{{old('name')}}">
@if($errors->has('name')) <span>{{$errors->first('name')}}</span>@endif
</td>
</tr>
<tr>
  <td class="font-weight-bold">メールアドレス</td>
  <td><input class="form-control" type="text" name="email" value="{{old('email')}}">
  @if($errors->has('email')) <span>{{$errors->first('email')}}</span>@endif
  </td>
</tr>
<tr>
  <td class="font-weight-bold">電話番号</td>
  <td><input class="form-control" type="text" name="tel" value="{{old('tel')}}">
  @if($errors->has('tel')) <span>{{$errors->first('tel')}}</span>@endif
</td>
</tr>
<tr>
  <td class="font-weight-bold">パスワード</td>
  <td><input class="form-control" type="password" name="password">
  @if($errors->has('password')) <span>{{$errors->first('password')}}</span>@endif
</td>
</tr>
<tr>
  <td class="font-weight-bold">パスワード確認</td>
  <td><input class="form-control" type="password" name="password_confirmation">
  @if($errors->has('password_confirmation')) <span>{{$errors->first('password_confirmation')}}</span>@endif
</td>
</tr>
</table>
  <input type="submit" class="btn btn-info mx-auto d-block" value="登　録">
  </form>
</div>
</main>
</div>
</body>
</html>