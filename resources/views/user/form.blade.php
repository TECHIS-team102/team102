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
    <!-- バリデーションの設定 -->
    @if (count($errors) > 0)
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <!-- フォーム部分 -->
<form action="/user/update" method="post">
 
  @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
  <!-- (1)ユーザー名 -->
  <div class="form-group">
    <label class="col-md-1 control-label" for="name" >名前</label>
    <div class="col-md-10">
      <input name="name"
         class="form-control valid"
         id="name"
         type="text"
         value="{{$user->name}}"
         data-val-required="名前 フィールドが必要です。"
         data-val="true">
    </div>

  </div>

  <!-- (2)email-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="email">メールアドレス</label>

    <div class="col-md-10">
      <input name="email"
         class="form-control
         input-validation-error"
         id="email"
         type="email"
         value="{{$user->email}}"
         data-val-required="emailが必要です。"
         data-val="true"
         data-val-length-min="7"
         data-val-length-max="100"
         data-val-length="パスワード の長さは、7 文字以上である必要があります。">
    </div>
  </div>

  <!-- (3)電話番号の確認 -->
  <div class="form-group">
    <label class="col-md-3 control-label" for="tel">電話</label>

    <div class="col-md-10">
      <input name="tel"
         class="form-control
         input-validation-error"
         id="tel"
         type="tel"
         value="{{$user->tel}}"
         data-val-required="telが必要です。"
         data-val="true"
         data-val-length="numeric"
         data-val-length-min="8"
         data-val-length-max="11"
         data-val-length="電話番号は8文字以上11文字以内である必要があります。">
    </div>
  </div>

  </div>
  <!-- (4)管理者権限ボタン -->
  <div class="form-group">
  <div class="col-md-10">
  <input type="checkbox" name="admin" value="on" {{ $user->role == 2 ? 'checked' : '' }}>
    <label class="col-md-3 control-label" for="admin">管理者</label>
    
    </div>
  </div>

  <!-- (5)送信ボタン -->
  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <input class="btn btn-default" type="submit" value="登録">
    </div>
  </div>

</form>
    
    
    
</body>
</html>