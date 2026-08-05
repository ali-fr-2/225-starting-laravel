<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{
    // protected $table="userpart";

    protected $fillable = ['title','price','body'];

    use SoftDeletes;


}
