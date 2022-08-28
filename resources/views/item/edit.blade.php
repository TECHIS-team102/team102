<h1>編集画面</h1>
<p><a href="/item">一覧画面</a></p>
 
<P>商品番号：{{$item->id}}
</P> 
<form action="/item/update" method="POST">
        @csrf
        <p>商品名：<input type="text" name="name" value="{{old('name', $item->name)}}"></p>
        <span>{{$errors->first('name')}}</span>
        <P>商品種別:
        <select name="type">
         <option value=""></option>
         @foreach($type as $key=>$val)
         <option value="{{$key}}" {{old('type',$item->type)==$key ? "selected" : ""}}>{{$val}}</option>
         @endforeach
         </select>
        </P>
        <span>{{$errors->first('type')}}</span>
        <p>詳細：<textarea name="detail" cols="30" rows="10">{{old('detail', $item->detail )}}</textarea>
        <span>{{$errors->first('detail')}}</span>
       <!-- <P> <input type="radio" name="status" value="1">有効
        <input type="radio" name="status" value="2">無効
        </P> -->
        <input type="submit" value="登録する">
        <input type="hidden" name="id" value="{{$item->id}}">

    </form>   