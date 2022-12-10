<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        return view('top', [
        ]
    );

}

    public function mypage(){
    return view('mypage', [
    ]
    );

}
    public function menu(){
    return view('menu', [
    ]
    );


}
    public function profile(){
    return view('profile', [
    ]
    );


}

}
