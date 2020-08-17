<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $table = 'product_types';

    protected $fillable = [
        'cate_id', 'name', 'slug', 'stt',
    ];

    public function Categories(){
        return $this->belongsTo('App\Model\Categories','cate_id','id');
    }

    public function Products(){
        return $this->hasMany('App\Model\Products','id_pro_type','id');
    }
}
