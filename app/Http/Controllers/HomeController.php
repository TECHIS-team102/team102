<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
       /**
        * 一覧表示
        *
        * @param Request $request
        * @return Response
        */
        public function home(Request $request)
        {
            $type_names = config('app.type_name');
            $items = Item::orderBy('created_at', 'asc')->paginate(3);
        return view('home.home', [
            'items' => $items,
            'type_names'=> $type_names,
        ]);
        }

         /**
         * 詳細画面の表示
         */
        public function detail($id)
        {
            $item = Item::find($id);

            return view('home.detail', compact('item'));
        }

        /**
         * 検索機能
         */
        public function index(Request $request)
        {
            $keyword = $request->input('keyword');

            $query = Item::query();

            if(!empty($keyword)) {
                switch($keyword){
                    case '清掃用具':
                        $keyword = '1';
                        break;
                    case '衛生用品':
                        $keyword = '2';
                        break;
                    case '文房具':
                        $keyword = '3';
                        break;
                    case '寝具類':
                        $keyword = '4';
                        break;
                    case '料理器具':
                        $keyword = '5';
                        break;
                }
                $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('type', 'LIKE', "%{$keyword}%");
            }

            $type_names = config('app.type_name');
            $items = $query->orderByDesc('created_at')->paginate(3);
            return view('home.home', compact('items','type_names'));
        }
}
