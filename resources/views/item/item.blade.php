<h1>一覧画面</h1>
<p><a href="{{ route('create') }}">新規追加</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<table border="1">
    <tr>
        <th>title</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->title }}</td>
        <th><a href="{{ route('item.show',$item->id)}}">詳細</a></th>
        <th><a href="{{ route('item.edit',$item->id)}}">編集</a></th>
        <th>
            <form action="{{ route('item.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>