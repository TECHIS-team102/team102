@extends('layout.app')
 
@section('content')
 
<!-- タスク一覧表示 -->

<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="text-center">日用品管理システム</h1>
        <div>
            <form class="text-center pb-5 pt-3"  action="{{ route('home')}}" method="GET">
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
                <th class="text-center">名前</th>
                <th class="text-center">商品ID</th>
                <th class="text-center">種別</th>
                <th class="text-center">詳細</th>
                <th class="text-center">更新日</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($items as $item)
                <tr class="border">
                    <!-- 名前 -->
                    <td class="table-text text-center">
                        <div>{{$item-> name }}</div>
                    </td>
                     <!-- ID -->
                     <td class="table-text text-center">
                        <div>{{$item-> id }}</div>
                    </td>
                    <!-- 種別 -->
                    <td class="table-text text-center">
                        <div>{{$type_names[$item->type] ?? $item->type }}</div>
                    </td>
                    <!-- 詳細ボタン -->
                    <td>
                        <li class="nav-item list-unstyled text-center">
                            <a class="nav-link" href="{{ route('detail',['id' => $item->id]) }}">{{ __('詳細') }}</a>
                        </li>
                    </td>
                    <!-- 更新日 -->
                    <td class="table-text text-center">
                        <div>{{$item-> updated_at }}</div>
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