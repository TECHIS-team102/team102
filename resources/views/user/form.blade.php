<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>
    <h1>編集フォーム</h1>
   
    <table>
        <!-- action:どこに、method:どうやって、enctypr:どんな形で -->
        <form action="/user/update" method="post">
            <!-- @csrfを行うことによりエラーを少なくする 
            input type=どのように表示させるか name:部品の名前。サーバに送られたとき、ラベルの役割をする
            value:部品の初期値。valueに値を入れておくと、それが最初から入力されている。-->
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <tr><th>name: </th><<td><input type="text" name="name" value="{{$user->name}}"></td></tr>
            <tr><th>mail: </th><<td><input type="text" name="email" value="{{$user->email}}"></td></tr>
            <tr><th>tel: </th><<td><input type="text" name="tel" value="{{$user->tel}}"></td></tr>
            <tr><th>管理者権限: </th><<td><input type="checkbox" name="admin" value=2></td></tr>
            <!-- <tr><th>password: </th><<td><input type="text" name="password" value="{{$user->password}}"></td></tr> -->
            
            <tr><th></th><td><input type="submit" value="send"></td></tr>
         
        
</form>
    </table>
    
    
</body>
</html>