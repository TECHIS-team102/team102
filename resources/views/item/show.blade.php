<h1>詳細画面</h1>
<p><a href="{{ route('item.index')}}">一覧画面</a></p>

<table border="1">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>detail</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->detail }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
    </tr>
</table>
