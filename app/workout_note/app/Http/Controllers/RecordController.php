<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Record;
use App\MenuRecord;
use App\Menu;
use App\User;
use App\Http\Requests\RecordRegister;



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



    public function index(Request $request)
    {
        // dd($request);


        $menu = DB::table('users')
            // ->join('record_menu', 'records.id', '=', 'record_menu.record_id')
            ->join('records', 'users.id', '=', 'records.user_id')
            ->get();

        $user_flg = 1;
        $nomaluser = 0;





        return view(
            'top',
            [
                'menus' => $menu,
                'flg' => $user_flg,
                'flgs' => $nomaluser,
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
        $user = auth()->id();
        $menu = Menu::where('user_id', '0')
            ->orwhere('user_id', '=', $user)
            ->get();


        // dd($menu);
        {
            return view(
                'workoutregister',
                [
                    'menus' => $menu
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
    public function store(RecordRegister $request)
    {
        //  dd($request);
        //追加処理


        $data = new Record;

        $user = auth()->id();



        $data->title = $request->title;

        $data->body_weight = $request->body_weight;
        $data->user_id = $user;
        $data->date = today();

        $data->save();

        
        // dd($request->records);
        foreach ($request->records as $record) {
            $workout = new MenuRecord;
            $workout->menu_id = $record['menu_id'];
            $workout->weight = $record['weight'];
            $workout->set = $record['set'];
            $workout->rep = $record['rep'];
            $workout->record_id = $data->id;
            $workout->save();
        }
        
        return redirect(
            'my',
        );
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        //詳細表示
        $menu = DB::table('records')
            ->join('record_menu', 'records.id', '=', 'record_menu.record_id')

            ->where('record_menu.record_id', '=', $id)
            ->get();
        // dd($menu);

        $comment = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.user_id')
            ->where('record_id', '=', $id)
            ->get();
        // dd($comment);
        return view(
            'detail',
            [
                'menus' => $menu,
                'comments' => $comment,
            ]
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
        // dd($id);
        //編集画面
        $menu = DB::table('records')
            ->join('record_menu', 'records.id', '=', 'record_menu.record_id')
            // ->join('menus', 'record_menu.menu_id', '=', 'menus.id')
            ->where('record_menu.id', '=', $id)
            ->get();

        $syumoku = Menu::where('user_id', '1')->get();


        // dd($menu);
        return view(
            'editrecord',
            [
                'menus' => $menu,
                'syumokus' => $syumoku,
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
    public function update(int $id, Request $request)
    {
        //編集処理

        // dd($request);

        $menu = DB::table('records')
            ->join('record_menu', 'records.id', '=', 'record_menu.record_id')
            // ->join('menus', 'record_menu.menu_id', '=', 'menus.id')
            ->where('record_menu.id', '=', $id)


            ->update([
                'menu_id' => $request->menu_id,
                'weight' => $request->weight,
                'rep' => $request->rep,
                'set' => $request->set,


            ]);

        // $menus->save();

        return redirect('/');
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
        // dd($id);

        $record = DB::table('records')
            ->where('id', '=', $id);
        //    $record=$instance->find($id);

        // dd($record);


        $record->delete();


        return redirect('/');
    }
}
