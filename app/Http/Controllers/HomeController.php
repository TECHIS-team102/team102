<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
       
                /**
         * 一覧表示、検索機能
         */
        public function home(Request $request)
        {
            $keyword = $request->input('keyword');
            $search = $keyword;
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
                $query->where(function($query)use($keyword){
                    $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('type', 'LIKE', "%{$keyword}%");
                });

                
            }

            $type_names = Item::TYPE_NAME;
            $items = $query->where('status',1)->orderByDesc('created_at')->paginate(5);
            return view('home.home', compact('items','type_names','search'));
        }

         /**
         * 詳細画面の表示
         */
        public function detail($id)
        {
            $item = Item::find($id);

            return view('home.detail', compact('item'));
        }


}
