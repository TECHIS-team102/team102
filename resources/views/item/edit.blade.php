<h1>編集画面</h1>
<p><a href="{{ route('item.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<form action="{{ route('item.update',$item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>商品名：<input type="text" name="title" value="{{ $item->title }}"></p>
    <p>詳細：<input type="text" name="detail" value="{{ $item->detail }}"></p>
    <input type="submit" value="編集する">
</form>