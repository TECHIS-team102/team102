<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel+Vue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <title>ヘッダーのデザイン</title> 
</head> 
<body> 
<!-- @incledeを表示させたいbodyに貼ってもらう -->
@include('parts.header')
<div class="containr">
    
    <h1 class="text-center">ユーザー一覧画面</h1>
    <main class="mx-auto px-5">
    
    <form method="GET" action="/user">
    <input type="search" placeholder="ユーザー名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
   
        <button type="submit">検索</button><br><br>
        
</form>

    <table class="table table-bordered">
	    <thead  class="thead-dark">
	
		    <tr>
			<th>ID</th>
			<th>ユーザ名</th>
			<th>E-mail</th>
            <th>電話</th>
            <th>作成日</th>
            <th>更新日</th>
            <th>管理者権限</th>

		    </tr>
	    </thead>
	<tbody>
        @foreach ($users as $user)
		
      <tr>
			<td>{{ $user -> id }}</td>
			<td><a href="/user/edit/{{$user->id}}">{{ $user -> name }}</a></td>
			<td>{{ $user -> email }}</td>
            <td>{{ $user -> tel }}</td>
            <td>{{ $user -> updated_at }}</td>
            <td>{{ $user -> created_at }}</td>
            <td>
            <!-- userのroleが1なら -->
             @if($user->role==1)   
            利用者
            <!-- userのroleが1以外のとき -->
            @else
            管理者
            <!-- コロン構文のif文の終わり -->
            @endif
            </td>
            
        </tr>
        @endforeach
    </table>
    {{ $users->appends(request()->query())->Links('pagination::bootstrap-4') }}
</main>
</div>
</body>
</html>