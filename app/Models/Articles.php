<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;

class Articles extends Model
{
    // protected $table="userpart";

    protected $fillable = ['title', 'price', 'body'];

    use SoftDeletes;

    //global-scopes

    // #[Override]
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('price', function ($query) {
    //         $query->where('price', '>', '100');
    //     });
    // }

    //local-scopes

    public function scopePrice($query){
        $query->where('price','>','100');
    }
}
