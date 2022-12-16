<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Record;
use App\MenuRecord;
use App\Menu;
use App\User;



use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $menu= DB::table('users')
                // ->join('menu_record', 'records.id', '=', 'menu_record.record_id')
                ->join('records', 'users.id', '=', 'records.user_id')
                ->get();
// dd($menu);

        return view('top', [
            'menus'=>$menu,
        ]
        );
       
        //トップ
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //追加画面表示
       {
            return view('workoutregister', [
            ]
        );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //追加処理
        $workout = new MenuRecord;
        $data = new Record;
        
        $workout->menu_id =$request->menu_id;
        $workout->weight =$request->weight;
        $workout->rep =$request->rep;
        $workout->set =$request->set;
        $workout->record_id = 2;

        $user = auth()->id();
        
        $data->body_weight=$request->body_weight;
        $data->user_id =$user;
        $data->date = today();

        
        // dd($data);

        $workout->save();
        $data->save();

        return view('mypage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //詳細表示
        $menus= DB::table('records')
        ->join('menu_record', 'records.id', '=', 'menu_record.record_id')
        ->join('menus', 'menu_record.menu_id', '=', 'menus.id')
        ->where('menu_record.record_id','=',$id)
        ->get();


        return view('detail', [
        'ids'=>$menus,]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //編集画面
        $menus= DB::table('records')
        ->join('menu_record', 'records.id', '=', 'menu_record.record_id')
        ->join('menus', 'menu_record.menu_id', '=', 'menus.id')
        ->where('menu_record.record_id','=',$id)
        ->get();
       
// dd($menus);
return view('editrecord', [
    'ids'=>$menus,
]
);
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
        //編集処理
        
        dd($id);
        
            $menus= DB::table('records')
                    ->join('menu_record', 'records.id', '=', 'menu_record.record_id')
                    ->join('menus', 'menu_record.menu_id', '=', 'menus.id')
                    ->where('menu_record.recordid','=',$id)
                    ->update([
                        'menu' => '$menus->menu',
                        'weight' => '$menus->weight',
                        'rep' => '$menus->rep',
                        'set' => '$menus->set',
                    ]);
    
            $menus->save();
    
            return view('top', [
                
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //削除
    }
}
