<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categories(){
        return $this->belongsTo('App\Category','category_id');
    }
}
