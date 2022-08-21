<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <div class="container-sm">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <h1>登録画面</h1>
   
  
  <label class="label" for="email">メールアドレス</label>
  <input id="email" type="text" name="email">
  <label class="label" for="password">パスワード</label>
  <input id="password" type="password" name="password">
  <label class="label" for="email">メールアドレス</label>
  <input id="email" type="text" name="email">
  <label class="label" for="password">パスワード</label>
  <input id="password" type="password" name="password">
  <input type="submit" class="btn btn-info" value="登録">
  </form>
</div>

</html>