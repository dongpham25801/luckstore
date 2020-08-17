<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'category';

    protected $fillable = [
        'name', 'slug', 'stt',
    ];

    public function ProductType(){
        return $this->hasMany('App\Model\ProductType','cate_id','id');
    }
}
