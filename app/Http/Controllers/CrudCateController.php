<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Model\Categories;
use App\Http\Requests\StoreCateRequest;
use Illuminate\Support\Facades\DB;

class CrudCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $cate = Categories::paginate(6);
        $cate = Categories::all();
        return view('admin.categories.index-cate',compact('cate'));
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
        Categories::create([
            'name' => $request->name,
            'slug' => utf8tourl($request->name),
            'stt' => $request->stt,
        ]);
        $cate = Categories::all();
        return view('admin.categories.index-cate',compact('cate'));
        return response()->json(['success' => 'Thêm danh mục thành công !']);
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
        $cate = Categories::find($id);
        return response()->json($cate,200);
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
        $cate = Categories::find($id);
        $cate->update([
            'name' => $request->nameEdit,
            'slug' => utf8tourl($request->nameEdit),
            'stt' => $request->sttEdit,
        ]);
        return response()->json(['success' => 'Cập nhật danh mục thành công !']);
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
        $cate = Categories::find($id);
        $cate->delete();
        return response()->json(['success' => 'Xóa thành công !']);
    }
}
