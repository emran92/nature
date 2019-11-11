<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =[];

    protected $table = 'categories';

    public function products(){
        return $this->hasMany('App\Product','category_id'); // one to many
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
