@extends('layout.app')
 
@section('content')

<h1 class="text-center">詳細</h1>

<table class="table table-striped mx-auto col-12 col-md-6" style="width: 500px">
  <thead>
    <tr>
      <th class="text-center">名前</th>
    </tr>
    <td class="text-center font-weight-bold">[  {{ $item->name }}  ]</td>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">商品ID</th>
    </tr>
    <td class="text-center">{{ $item->id }}</td>
    <tr>
    <th class="text-center">詳細</th>
    </tr>
    <td class="mx-5 px-5">{!! nl2br(e( $item->detail)) !!}</td>
    <tr>
      <th class="text-center">更新日</th>
    </tr>
    <td class="text-center">{{ $item->updated_at }}</td>
  </tbody>
</table>
@endsection