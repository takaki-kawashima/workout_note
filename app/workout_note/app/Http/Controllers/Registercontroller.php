<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Comment;
use App\Record;
use App\MenuRecord;
use App\Menu;
use App\User;

use Illuminate\Support\Facades\DB;

class Registercontroller extends Controller
{
    //

    public function register(){
        return view('workoutregister', [
        ]
    );

}

    public function workoutregister(Request $request){
        // dd($request);
        $workout = new MenuRecord;
        $data = new Record;
        
        $workout->menu_id =$request->menu_id;
        $workout->weight =$request->weight;
        $workout->rep =$request->rep;
        $workout->set =$request->set;
        $workout->record_id = 1;
        
        $data->body_weight=$request->body_weight;
        $data->user_id =1;
        $data->date = today();

        $workout->save();
        $data->save();

        return view('mypage');

        
    }
 
    public function menuadd(){
    return view('menuadd', [
    ]
);

}

    public function menuadd2(Request $request){
        // dd($request->menu);

        $user_id=1;
        // Menu::create([
        //     'menu' => $request->menu,
        //     'user_id' => $user_id,
        //     ]);
    $menu = new Menu;
    
    
    $menu->menu = $request->menu;
    $menu->user_id = $user_id;
    // dd($menu);
    

    
    
    $menu->save();

    return view('workoutregister');
}


    public function profile_update(){
    return view('profile_update', [
    ]
);

}

public function editRecordForm(int $id ,Request $request ) {
 
    // dd($id);
    
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


public function editrecord2(Request $request) {
    $id=$request->id;
    // dd($id);
    
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


public function Delete(int $id)
{
//  dd($id);
//    $instance = new Record;
// dd($instance);

$record=DB::table('records')
            ->where('records.id', '=', $id);
//    $record=$instance->find($id);
   

    
//   dd($record);
    $record->delete();
    
    
    return redirect('/');
    
}


}
