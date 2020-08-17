<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Brands;
use App\Model\Cart;
use App\Model\Categories;
use App\Model\Products;
use App\Model\ProductType;
use Illuminate\Http\Request;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\PreDec;
use Session;

session_start();

class ShoppingCartController extends Controller
{
    public function __construct()
    {
        $category = Categories::where('stt',1)->get();
        $ptype = ProductType::where('stt',1)->get();
        $brands = Brands::all();
        view()->share(['category' => $category,'ptype' => $ptype]);
    }

    public function index(Request $request)
    {
        return view('luckshop.cart.shopping-cart');
    }

    public function addCart($id)
    {
//        dd($id);
        $product = DB::table('products')->where('id',$id)->first();
        if ($product != null){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newcart = new Cart($oldcart);
            $newcart->addCart($product, $id);
            dd($newcart);
        }
    }
}
