<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Record;
use App\MenuRecord;
use App\Menu;
use App\User;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function mypage(Request $request ) {
 
       
            return view('mypage', 
                
            
            );
    
        
        
    }

    public function menu(Request $request ) {
 
      
            return view('menu', 
                
            
            );
    
        
        
    }
    public function detail(int $id,Request $request ) {


        $menus= DB::table('records')
                ->join('menu_record', 'records.id', '=', 'menu_record.record_id')
                ->join('menus', 'menu_record.menu_id', '=', 'menus.id')
                ->where('menu_record.record_id','=',$id)
                ->get();
 
      
        return view('detail', [
        'ids'=>$menus,]
            
        
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









}









