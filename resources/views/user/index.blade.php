<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel+Vue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    	body{
    		margin:20px;
    	}
    </style>
</head>
<body>
    <h1>ユーザー一覧画面</h1>
    
    <form method="GET" action="/user">
    <input type="search" placeholder="ユーザー名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
   
        <button type="submit">検索</button>
        
</form>

    <table class="table table-bordered">
	    <thead  class="thead-dark">
	
		    <tr>
			<th>ID</th>
			<th>ユーザ名</th>
			<th>E-mail</th>
            <th>電話</th>
            <th>パスワード</th>
            <th>作成日</th>
            <th>更新日</th>
            <th>管理者</th>

		    </tr>
	    </thead>
	<tbody>
        @foreach ($users as $user)
		
      <tr>
			<td>{{ $user -> id }}</td>
			<td>{{ $user -> name }}</td>
			<td>{{ $user -> email }}</td>
            <td>{{ $user -> tel }}</td>
            <td>{{ $user -> password }}</td>
            <td>{{ $user -> updated_at }}</td>
            <td>{{ $user -> created_at }}</td>
            <td><a href="/user/edit/{{$user->id}}"class="btn btn-edit">編集</button></td>
          
        </tr>
        @endforeach
    </table>
    {{ $users->appends(request()->query())->Links('pagination::bootstrap-4') }}

</body>
</html>