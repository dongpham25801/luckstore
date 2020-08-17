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
class HomeController extends Controller
{
    public function __construct()
    {
        $category = Categories::where('stt',1)->get();
        $ptype = ProductType::where('stt',1)->get();
        $brands = Brands::all();
//        $product = Products::all();
//        $img = Images_products::where('id_product','=',$)
        view()->share(['category' => $category,'ptype' => $ptype]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dmnu = Categories::where('stt',1)->where('name','nu')->get()->first();
        $dmnam = Categories::where('stt',1)->where('name','nam')->get()->first();
        $pt_nu = ProductType::where('stt',1)->where('cate_id',2)->get();
        $pt_nam = ProductType::where('stt',1)->where('cate_id',1)->get();
        $sp_nam = Products::where('stt',1)->where('id_cate','1')->get();
        $sp_nu = Products::where('stt',1)->where('id_cate','2')->get();
//        dd($pt_nu,$pt_nam,$sp_nam,$sp_nu);
        return view('luckshop.home.home',compact('dmnu','dmnam','pt_nu','pt_nam','sp_nu','sp_nam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
