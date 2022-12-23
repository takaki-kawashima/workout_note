<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Record;
use App\MenuRecord;
use App\Menu;
use App\User;
use App\Models\Item;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Requests\RecordRegister;

class TopController extends Controller
{
    //
    public function mypage(Request $request ) {
        $user = auth()->id();
       
        $menu= DB::table('users')
                ->join('records', 'users.id', '=', 'records.user_id')
                ->where('records.user_id','=',$user)
                ->get();

                $log_list =DB::table ('records')
                
                ->where('records.user_id','=',$user)
                ->where("created_at","like",date("Y") . "%")
                ->get();
                // dd($log_list);
// dd($menu);


        
       
            return view('mypage',  [
                'menus'=>$menu,
                "log_list" => $log_list,
                // 'item' => $items,
            ]
                
            
            );
    
        
        
    }

    public function menu(Request $request ) {
 $power='パワーアップ';
 $bulk='バルクアップ';
 $shape='シェイプアップ';


      
            return view('menu', [
                'powers' => $power,
                'bulks' => $bulk,
                'shapes' =>$shape,

            
            ]);
    
        
        
    }
    public function detail(int $id,Request $request ) {


        $menu= DB::table('records')
                ->join('menu_record', 'records.id', '=', 'menu_record.record_id')
                ->join('menus', 'menu_record.menu_id', '=', 'menus.id')
                ->where('menu_record.record_id','=',$id)
                ->get();
 
      
        return view('detail', [
        'menus'=>$menu,]
            
        
        );

    
    

    }

    public function profile(Request $request ) {

        $id = auth()->id();

        $profile= DB::table('users')
               
                ->where('id','=',$id)
                ->get();
                
        
       
      
        return view('profile', [
            'prof'=>$profile,
        ]
            
        
        );

    
    
}

public function profileedit(Request $request ) {

    $id = auth()->id();

    $profile= DB::table('users')
           
            ->where('id','=',$id)
            ->get();



            

  
    return view('profile', [
        'prof'=>$profile,
    ]
        
    
    );


}

public function userlist( ) {

    

    $user= DB::table('users')
           
            
            ->get();

   



    $block=new User;

    $userid = Auth::id();
   
    $record = $block->find($userid);
  
    if($record->user_flg==0){
        return redirect('/', 
            );
    }
  else{
    return view('userlist', [
        'users'=>$user,
    ]
    );
  }

}

public function userdelete(int $id)
{
    //削除
    
    $user=DB::table('users')
        ->where('id', '=', $id);

$user->delete();




return redirect('userlist');

}

public function commentall(Request $request)
{
  
    $keyword = $request->input('keyword');
 
    #クエリ生成
    $query = Comment::query();
   
    $block=new User;

    $userid = Auth::id();
   
    $record = $block->find($userid);
  
    if($record->user_flg==0){
        return redirect('/', 
            );
    }


    #もしキーワードがあったら
    elseif(!empty($keyword))
    {
      $comment=$query->where('comment','Like','%'.$keyword.'%')
      ->orderBy('created_at','desc')->paginate(10);
      
    }
  else{
    $comment = $query->orderBy('created_at','desc')->paginate(10);
  }

 #ページネーション
 
 return view('commentall',[
            'comments'=>$comment,]



);
}

public function commentlist(int $id ,Request $request)
{
  
    
    $comment=DB::table('comments')
        ->where('user_id', '=', $id)
        ->get();

        $block=new User;

        $userid = Auth::id();
       
        $record = $block->find($userid);
      
        if($record->user_flg==0){
            return redirect('/', 
                );
        }

else{

return view('commentlist',[
    'comments'=>$comment,]
);
}
}

public function commentdelete(int $id)
{
    //削除
    // dd($id);
    $comment=DB::table('comments')
        ->where('id', '=', $id);
        
        $comment->delete();


        return back();

}
public function index()
{
    return view('item.index');
}

public function create(Request $request)
{
    return view('item.create');
}

public function store(Request $request)
{
    // dd($request);
    // 画像フォームでリクエストした画像を取得
  
    // dd($userid);

    $file_name = $request->img_path->getClientOriginalName();
   
    // dd($file_name);
    $request->img_path->storeAs('public/img' , $file_name);

    $user=new User;

    $userid = Auth::id();
   
    $record = $user->find($userid);

    $record->path=$file_name;

    $record->save();

    return redirect('/');
}




}

