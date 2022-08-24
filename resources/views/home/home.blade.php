@extends('layout.app')
 
@section('content')
 
<!-- タスク一覧表示 -->

<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="text-center">日用品管理システム</h1>
        <div>
            <form class="text-center"  action="{{ route('home')}}" method="GET">
                <input type="text" name="keyword" placeholder="名前または種別を入力" value="@if (isset($search)) {{ $search }} @endif">
                <input type="submit" value="検索">
            </form>
            <!-- <p class="text-center text-muted" >名前または種別を入力してください</p> -->
        </div>
        <!-- <form action="{{-- route('logout') --}}" method="post"> -->
            <!-- @csrf
            <input type="submit" value="ログアウト">
        </form> -->
    </div>
   
    <div class="panel-body table">
    @if (count($items) > 0)
        <table class="table table-striped">
 
            <!-- テーブルヘッダ -->
            
            <thead>
                <th>名前</th>
                <th>種別</th>
                <th>詳細</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($items as $item)
                <tr class="border">
                    <!-- 名前 -->
                    <td class="table-text">
                        <div>{{$item-> name }}</div>
                    </td>
                    <!-- 種別 -->
                    <td class="table-text">
                        <div>{{$type_names[$item->type] ?? $item->type }}</div>
                    </td>
                    <!-- 詳細ボタン -->
                    <td>
                        <li class="nav-item list-unstyled">
                            <a class="nav-link" href="{{ route('detail',['id' => $item->id]) }}">{{ __('詳細') }}</a>
                        </li>
                    </td>
                </tr>
                @endforeach

                
            </tbody>
        </table>
        @else
        <p class="text-center pt-5">該当する商品はございません。</p>
        @endif
    </div>
   
</div>
<div class="d-flex justify-content-center">
{{ $items->appends(request()->input())->links() }}
</div>
@endsection