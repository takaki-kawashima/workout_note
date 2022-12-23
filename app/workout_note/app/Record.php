<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\RecordController;

class Record extends Model
{
    //
    protected $table ='records';
    protected $fillable =['user_id','del_flg','date','body_weight','title'];



}


