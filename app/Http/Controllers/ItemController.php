<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Item;
 
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item()
    {
        $items = item::all();
        return view('item.item', compact('items'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        item::create($request->all());
        return redirect()->route('item.item')->with('success', '新規登録完了しました');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = item::find($id);
        return view('item.show', compact('item'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = item::find($id);
        return view('item.edit', compact('item'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'title' => $request->title,
            'detail' => $request->detail
        ];
        item::where('id', $id)->update($update);
        return back()->with('success', '編集完了しました');
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