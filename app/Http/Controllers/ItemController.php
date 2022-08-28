<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Item;
 
class ItemController extends Controller
{
   private $rule= [
        'name' => 'required',
        'type' => 'required' ,
        'detail' => 'required'
    ];
    private $msg= [
        'name.required' => '商品名は必須です',
        'type.required' => '種別選択は必須です' ,
        'detail.required' => '詳細説明は必須です'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item()
    {
        $type=item::TYPE_NAME;
        $items = item::all();
        return view('item.item', compact('items','type'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=item::TYPE_NAME;
        return view('item.create',compact('type'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rule,$this->msg);

        item::create( [
            'name' =>$request->name,
            'user_id'=> 1,
            'status'=> 1,
            'type' =>$request->type,
            'detail' => $request->detail,
           ]);
        return redirect('/item');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $item = item::find($request->id);
        return view('item.show', compact('item'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $type=item::TYPE_NAME;
        $item = item::find($request->id);
        return view('item.edit', compact('item','type'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate($this->rule,$this->msg);
        $update = [
            'name' => $request->name,
            'detail' => $request->detail,
            'detail' => $request->type
        ];
        item::where('id', $request->id)->update($update);
        return redirect('/item');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        item::where('id', $id)->delete();
        return redirect()->route('item.item')->with('success', '削除完了しました');
    }
}