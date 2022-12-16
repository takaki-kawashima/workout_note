<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuRecord extends Model
{
    //
    protected $table ='menu_record';
    protected $fillable =['menu_id','record_id','weight','rep','set' ];
    
}
