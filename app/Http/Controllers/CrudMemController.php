<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudMemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mem = User::paginate(6);
        return view('admin.members.index-member',compact('mem'));
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
        $addMem = $request->all();
        $addMem['password'] = Hash::make($request->password);

        $create = User::create($addMem);
        return redirect()->action('CrudMemController@index')->with(['success' => 'Thêm tài khoản thành công.']);
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
        $editMem = User::find($id);
        return response()->json($editMem,200);
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
            $memper = User::find($id);
            $upd = $request->all();
            $upd['password'] = Hash::make($request->editPass);
            $memper->update($upd);
            return response()->json(['success' => 'Cập nhật người dùng thành công.']);


//        $upd = User::find($id);
//        $upd->name = $request->editName;
//        $upd->phone = $request->editPhone;
//        $upd->email = $request->editEmail;
//        $upd->password = Hash::make($request->editPass);
//        $upd->address = $request->editAddress;
//        $avt = $request->editAvt;
//        $upd->avt = $avt->store('/public/avatar/member');
//        $upd->save();
//        return response()->json(['success' => 'Cập nhật người dùng thành công.']);
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
        $trashMem = User::find($id);
        $trashMem->delete();
        return response()->json(['success' => 'Đã xóa người dùng.']);
    }
}
