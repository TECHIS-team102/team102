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
  <h1>新規ユーザー登録</h1>
  <form action="/account/register" method="post">
    @csrf
  <p>
  <label class="label" for="name">氏名</label>
  <input type="text" name="name">
  </p>
  <p>
  <label class="label" for="email">メールアドレス</label>
  <input type="text" name="email">
  </p>
  <p>
  <label class="label" for="tel">電話番号</label>
  <input type="text" name="tel">
  </p>
  <p>
  <label class="label" for="password">パスワード</label>
  <input type="password" name="password">
  </p>
  <p>
  <label class="label" for="password2">パスワード</label>
  <input type="password" name="password2">
  </p>

  <input type="submit" class="btn btn-info" value="登録">
  </form>
</div>

</html>