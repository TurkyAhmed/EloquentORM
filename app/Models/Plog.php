<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plog extends Model
{
    /* To use Soft Delete */
    // use SoftDeletes ;

    /* If table name not standared */
    protected $table="Table_Name";

    /* If primary key not Id */
    protected $primarKey= 'Column_Name';

    /* If primary key not Id, and type of primary key is string */
    protected $keyType = 'string';

    protected $fillable = ["title", "subTitle"];

    /* If primary key not increment by 1 */
    public $increment = false;

    /* if you not need to use timestamps */
    public $timestamps = false;

}
