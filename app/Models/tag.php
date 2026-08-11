<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function products()
    {
        return $this->belongsToMany(product::class,'product_tags');
    }
}
