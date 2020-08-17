<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Cart;
use App\Model\Brands;
use App\Model\Categories;
use App\Model\Products;
use App\Model\ProductType;
use Illuminate\Http\Request;
use App\Model\Images_products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class CartController extends Controller
{
    public function __construct()
    {
        $category = Categories::where('stt',1)->get();
        $ptype = ProductType::where('stt',1)->get();
        $brands = Brands::all();
        view()->share(['category' => $category,'ptype' => $ptype]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('luckshop.cart.shopping-cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addCart(Request $request, $id)
    {
        $product = DB::table('products')->where('id',$id)->first();
//        $piktro = Images_products::where('id_product',$product->id)->get();
        if ($product != null){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newcart = new Cart($oldcart);
            $newcart->addCart($product, $id);
            $request->Session()->put('Cart', $newcart);
//            dd(session('Cart'));
        }
//       return view('luckshop.cart.cart-table',compact('newcart','piktro'));
        return view('luckshop.cart.cart-table');
    }

    public function delItem(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->delItem($id);

        if (count($newcart->items) > 0){
            $request->Session()->put('Cart',$newcart);
        }else{
            $request->Session()->forget('Cart');
        }
//        return view('/shopping-cart/del-cart',compact('newcart'));
        return view('luckshop.cart.cart-table');
    }

    public function delCart(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->delItem($id);

        if (count($newcart->items) > 0){
            $request->Session()->put('Cart',$newcart);
        }else{
            $request->Session()->forget('Cart');
        }
//        return view('/shopping-cart/del-cart',compact('newcart'));
        return view('luckshop.cart.list');
    }

    public function saveCart(Request $request, $id, $qty)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->updateCart($id, $qty);

        $request->Session()->put('Cart',$newcart);

//        return view('luckshop.cart.list');
        return view('luckshop.cart.list');
    }

}
