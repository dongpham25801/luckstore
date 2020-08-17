<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Images_products;
use App\Model\Products;

class ImgProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prod = Products::all();
        $imgprod = Images_products::all();
        return view('admin.img-products.details',['prod' => $prod, 'imgprod' => $imgprod]);
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
//    public function store(Request $request)
//    {
//        //
////        $data = $request->all();
////        Images_products::create($data);
////        $data = Images_products::create($request->all());
//        foreach ($request->photos as $photo){
//            $filename = $photo->store('photos');
//            $data = Images_products::create($request->all());
//        }
//        $imgprod = Images_products::all();
//        return redirect('/admin/img-products');
//    }

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
