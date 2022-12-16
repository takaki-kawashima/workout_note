<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table ='menus';
    
    protected $fillable =['menu','user_id'];
    

    // protected $casts = [
    //     'user_id' => 'integer',
    // ];
    //
}
