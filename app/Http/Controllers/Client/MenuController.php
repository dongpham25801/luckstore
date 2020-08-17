<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Products;
use App\Model\Categories;
use App\Model\ProductType;
use App\Model\Brands;
use App\Model\Images_products;
use App\Model\Contacts;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $category = Categories::where('stt',1)->get();
        $ptype = ProductType::where('stt',1)->get();
        $brands = Brands::all();
        view()->share(['category' => $category,'ptype' => $ptype]);
    }
    public function menuNam($slug)
    {
        $category = Categories::where('stt',1)->where('slug',$slug)->get()->first();
        $pro_type = ProductType::where('stt',1)->where('cate_id','=',$category->id)->get();
        return view('luckshop.category.category', compact('pro_type'));
    }

    public function productDetail($slug,$a)
    {
        $pr = Products::where('stt',1)->where('slug',$a)->get()->first();
//        dd($pr);
//        $img = Images_products::where('id_product','=',$pr->id)->get();
//        dd($product->id,$img);
        return view('luckshop.products.detail',compact('pr'));
    }

    public function newArrival(){
        $new = Products::paginate(10)->orderBy('created_at','DESC');
        return view('luckshop.newarrival.new-arrival',compact('new'));
    }
}
