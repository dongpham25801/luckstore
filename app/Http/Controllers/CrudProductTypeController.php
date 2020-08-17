<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePtypeRequest;
use Illuminate\Http\Request;
use App\Model\ProductType;
use App\model\Categories;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdatePtypeRequest;

class CrudProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ptype = ProductType::all();
        return view('admin.product-type.index-product-type', compact('ptype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cate = Categories::all();
        return view('admin.product-type.add-modal',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePtypeRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
        // dd($data);
        ProductType::create($data);
        $ptype = ProductType::all();
//        return view('admin.product-type.index-product-type', compact('ptype'));

        return redirect('admin/product-type');

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
        $ptype = ProductType::find($id);
//        return response()->json($ptype,200);
        $cate = Categories::where('stt',1)->get();
        return response()->json(['cate' => $cate, 'ptype' => $ptype],200);
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
        $ptype = ProductType::find($id);
//        $cate = Categories::all();
        $cate = Categories::where('stt',1)->get();
        return response()->json(['cate' => $cate, 'ptype' => $ptype],200);
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
        $ptype = ProductType::find($id);
        $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
        $ptype->update($data);
        return response()->json(['success' => 'Cập nhật thành công']);
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
        $ptype = ProductType::find($id);
        $ptype->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
