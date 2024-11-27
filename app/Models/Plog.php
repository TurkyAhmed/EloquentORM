<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plog extends Model
{
    //
    // use SoftDeletes ;
    // public $primarKey = 'uuid';

    protected $fillable = ["title", "subTitle"];

}
