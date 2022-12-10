<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Comment;
use App\Data;
use App\Data_menu;
use App\Menu;
use App\Users;

use Illuminate\Support\Facades\DB;

class Registercontroller extends Controller
{
    //

    public function register(){
        return view('workoutregister', [
        ]
    );

}

    public function workoutregister(Request $reques){
        $workout= new Data_menu;
    
        $workout->weight =$reques->weight;
        $workout->rep =$reques->rep;
        $workout->set =$reques->set;

        $workout->seva();
        return redirect('/mypage');



    }
 
    public function menuadd(){
    return view('menuadd', [
    ]
);

}

    public function menuadd2(Request $reques){
        // dd($reques->name);
    $menu = new Menu;
    
    $menu->menu = $reques->menu;

    // Auth::user()->income()->save($ca);

    $menu->save();

    return redirect('/workoutregister');
}


    public function profile_update(){
    return view('profile_update', [
    ]
);

}
}
