<?php

namespace App\Http\Controllers;
//下記追加
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    //Request $reguestは基本的に使用ctrl/にてコメントアウト
    //ページネーションのコード(10)を編集すると表示されるデーターが変更される
    //新規に作成する場合PHP Adminのデーターを削除しVsコードにphp artisan db:seedを使用
    public function index(Request $request)
    {
        // 検索フォームで入力された値を取得する
        $search = $request->input('search');

        // クエリビルダ
        $query = User::query();

        // もし検索フォームにキーワードが入力されたら
        if ($search) {
            //SQL発行しただけ
            $query->where('name', 'like', '%'.$search.'%');
            //実際に検索実行、Getでも可能
            $users=$query->paginate(10);
        } else {
        
            $users = User::paginate(10); 
        }
        return view("user.index" ,[
            'users' => $users,
            'search' => $search,
        ]);
    
    }
    //編集機能UserのIDからuserformへ
    public function edit(Request $request,$id)
    {
        $user=User::find($id);
        return view("user.form",[
            'user' => $user,
        ]);
    }
    
    
    // public function form(Request $request)
    // {
    //     return view("user.form");

    // }
    
    //IDから管理者が編集
    public function update(Request $request)
    {   
    //    バリデーションの設定
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
			'tel' => ['required', 'string', 'max:255'],
        ]);
        if ($request->admin==2) {
            $user=User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->tel = $request->tel;
            $user->save();
            return redirect("/user");
        } else {
            return redirect("/user/edit/".$request->id);
        }
         } 
   
}

    // 削除機能は今回使用しないpublic function danger(Request $request)
    // {
    //     $user=User::find($request->id);
    //     $user->delete();
        
    
    //     return redirect("/user");
    // } 
    
    

// $articles = Post::orderBy('created_at', 'asc')->where(function ($query) {

//     // 検索機能
//     if ($search = request('search')) {
//         $query->where('name', 'LIKE', "%{$search}%")
//         ;
//     }

//     // 10投稿毎にページ移動
// })->paginate(10);