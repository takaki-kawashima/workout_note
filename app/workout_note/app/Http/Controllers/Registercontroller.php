<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Comment;
use App\Record;
use App\MenuRecord;
use App\Menu;
use App\User;

use App\Models\Item;
use App\Http\Requests\MenuAdd;
use Illuminate\Support\Facades\DB;

class Registercontroller extends Controller
{
    //

    public function register()
    {
        return view(
            'workoutregister',
            []
        );
    }

    public function workoutregister(Request $request)
    {
        // dd($request);
        $workout = new MenuRecord;
        $data = new Record;

        $workout->menu_id = $request->menu_id;
        $workout->weight = $request->weight;
        $workout->rep = $request->rep;
        $workout->set = $request->set;
        $workout->record_id = 1;

        $data->body_weight = $request->body_weight;
        $data->user_id = 1;
        $data->date = today();

        $workout->save();
        $data->save();




        return redirect('mypage');
    }

    public function menuadd()
    {
        return view(
            'menuadd',
            []
        );
    }

    public function menuadd2(MenuAdd $request)
    {
        // dd($request->menu);
        $user = auth()->id();
        $user_id = $user;
        // Menu::create([
        //     'menu' => $request->menu,
        //     'user_id' => $user_id,
        //     ]);
        $menu = new Menu;


        $menu->menu = $request->menu;
        $menu->user_id = $user_id;
        // dd($menu);



        // dd($menu);
        $menu->save();

        return redirect(
            'record/create',


        );
    }


    public function profile(Request $request)
    {

        $id = auth()->id();

        $profile = DB::table('users')

            ->where('id', '=', $id)
            ->get();


        return view(
            'profile',
            [
                'prof' => $profile,
            ]


        );
    }


    public function EditProfile(Request $request)
    {



        $id = auth()->id();

        $profile = DB::table('users')

            ->where('id', '=', $id)
            ->get();


        return view(
            'profile_edit',
            [
                'prof' => $profile,
            ]


        );
    }
    public function profile_update(int $id, Request $request)
    {

        // dd($id);
        $instance = new User;
        $record = $instance->find($id);
        $record->name = $request->name;
        $record->rubi = $request->rubi;
        $record->email = $request->email;
        $record->purpose = $request->purpose;



        $record->save();





        return redirect('profile');
    }





    public function editRecordForm(int $id, Request $request)
    {

        // dd($id);

        $menus = DB::table('records')
            ->join('record_menu', 'records.id', '=', 'record_menu.record_id')
            ->join('menus', 'record_menu.menu_id', '=', 'menus.id')
            ->where('record_menu.record_id', '=', $id)
            ->get();

        // dd($menus);
        return view(
            'editrecord',
            [
                'ids' => $menus,
            ]
        );
    }

    public function commentAdd(Request $request)
    {

        $user = auth()->id();
        // dd($id);

        $comment = new Comment;


        $comment->comment = $request->comment;
        $comment->user_id = $user;
        $comment->record_id = $request->record_id;

        $comment->save();

        $json = ['comments' => $comment];
        return response()->json($json);
    }






    public function upload(Request $request)
    {
        // ディレクトリ名
        $dir = 'img';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        return redirect('/profile');
    }
    public function delete($id)
    {
        //削除
        // dd($id);

        $record = DB::table('record_menu')
            ->where('id', '=', $id);
        //    $record=$instance->find($id);

        // dd($record);


        $record->delete();


        return back();
    }
}
