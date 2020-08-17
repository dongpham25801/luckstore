<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    // protected $primaryKey = 'MaSP';
    protected $fillable = [
        'MaSP', 'name', 'price', 'entry_price', 'promo_price', 'amount', 'description', 'id_cate', 'id_pro_type', 'slug', 'stt', 'brand', 'thumbnail',
    ];

    public function ProductType(){
        return $this->belongsTo('App\Model\ProductType','id_pro_type','id');
    }

    public function Categories(){
        return $this->belongsTo('App\Model\Categories','id_cate','id');
    }

    public function Brands(){
        return $this->belongsTo('App\Model\Brands','brand','id');
    }

    public function Images_products(){
        return $this->hasMany('App\Model\Images_products','id_product','id');
    }
}
