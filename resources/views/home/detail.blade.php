@extends('layouts.app')
 
@section('content')

<h1 class="text-center">詳細</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">名前</th>
    </tr>
    <td class="text-center">{{ $item->name }}</td>
     
   
  </thead>
  <tbody>
    <tr>
    <th class="text-center">詳細</th>
    </tr>
    <td class="text-center">{{ $item->detail }}</td>
  </tbody>
</table>
@endsection