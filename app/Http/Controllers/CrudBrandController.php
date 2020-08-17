<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brands;

class CrudBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brands::all();
        return view('admin.brands.index-brands',compact('brands'));
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
        Brands::create([
            'name' => $request->name,
            'slug' => utf8tourl($request->name),
            'thumbnail' => $request->thumbnail,
        ]);
        $brands = Brands::all();
        return view('admin.brands.index-brands',compact('brands'));
//        return response()->json($brand,200);
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
        $brands = Brands::find($id);
        return response()->json($brands,200);
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
        $brands = Brands::find($id);
        $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
        $brands->update($data);
        return response()->json(['success' => 'Cập nhật thương hiệu thành công.']);
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
        $brands = Brands::find($id);
        $brands->delete();
        return response()->json(['success' => 'Xóa thành công !']);
    }
}
