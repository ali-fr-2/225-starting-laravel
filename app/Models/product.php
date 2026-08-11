<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function tags()
    {
        return $this->belongsToMany(tag::class,'product_tags');
    }
}
