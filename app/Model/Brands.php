<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    //
    protected $table = 'brands';

    protected $fillable = ['name', 'slug', 'thumbnail'];

    public function Products(){
        return $this->hasMany('App\Model\Products','brand','id');
    }
}
