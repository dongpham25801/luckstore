<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Images_products extends Model
{
    //
    protected $table = 'images_products';

    protected $fillable = ['filename', 'id_product', 'link'];

    public function Products(){
        return $this->belongsTo('App\Model\Products','id_product','id');
    }
}
