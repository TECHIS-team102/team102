<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <form action="//www-creators.com/rsc/receiver.php" method="post">
  <label class="label" for="email">メールアドレス</label>
  <input id="email" type="text" name="email">
  <label class="label" for="password">パスワード</label>
  <input id="password" type="password" name="password">
  <input type="submit">
</form>

<style>
label, input[type=text]{
 display:block;
}
</style>

</html>