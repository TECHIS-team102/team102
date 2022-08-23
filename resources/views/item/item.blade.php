<h1>一覧画面</h1>
<p><a href="/item/create">新規追加</a></p>
 
 
<table border="1">
    <tr>
        <th>title</th>
        <th>詳細</th>
        <th>編集</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <th><a href="/item/show/{{$item->id}}">詳細</a></th>
        <th><a href="/item/edit/{{$item->id}}">編集</a></th>
    </tr>
    @endforeach
</table>