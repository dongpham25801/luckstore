<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Products;
use App\Model\Categories;
use App\Model\ProductType;
use App\Model\Images_products;
use App\Model\Brands;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\PreDec;

class CrudProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mf
        $prod = Products::paginate(6);
//        $prod = DB::table('products')->paginate(10);
        return view('admin.products.index-product', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cate = Categories::where('stt',1)->get();
        $producttype = ProductType::where('stt',1)->get();
        $brands = Brands::all();
        return view('admin.products.add-new-products',compact('cate','producttype', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Products::create($request->all());
//        $data = $request->all();
//        $data['slug'] = utf8tourl($request->name);
////        dd($data);
//        Products::create($data);
        if ($request->hasFile('photos')){
            $allowFileExtension = ['PNG','jpg','jpeg','gif'];
            $files = $request->file('photos');
            $exe_flg = true;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension,$allowFileExtension);
                if (!$check){
                    $exe_flg = false;
                    break;
                }
            }
            if ($exe_flg){
                $products = $request->all();
                $products['slug'] = utf8tourl($request->name);
                $data = Products::create($products);
                foreach ($request->photos as $photo){
                    $filename = $data->MaSP . '_' . $photo->getClientOriginalName();
                    $link = $photo->storeAs('/public/DarkAdmin/img/upload/products',$filename);
                    Images_products::create([
                        'id_product' => $data->id,
                        'filename' => $filename,
                        'link' => $link
                    ]);
                } return back()->with('success','Successfully.');
            }else{
                return back()->with('error','Failed upload.');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $prod = Products::find($id);
        $des = html_entity_decode($prod->description);
        $imgProd = Images_products::where('id_product','=',$prod->id)->get();
//        dd($imgProd);
        return view('admin.products.details',compact('prod','des','imgProd'));
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
//        dd($MaSP);
        $prod = Products::find($id);
        $cate = Categories::where('stt',1)->get();
        $producttype = ProductType::where('stt',1)->get();
        $brands = Brands::all();
        return view('admin.products.edit-products',compact('prod','cate','producttype','brands'));
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
//        dd($request->all());
        Products::find($id);
        if ($request->hasFile('photos')){
            $allowFileExtension = ['PNG','jpg','jpeg','gif'];
            $files = $request->file('photos');
            $exe_flg = true;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension,$allowFileExtension);
                if (!$check){
                    $exe_flg = false;
                    break;
                }
            }
            // dd(1);
            if ($exe_flg){
//                dd($request->all());
                $update = Products::find($id);
                $update->MaSP = $request->MaSP;
                $update->name = $request->name;
                $update->price = $request->price;
                $update->entry_price = $request->entry_price;
                $update->promo_price = $request->promo_price;
                $update->amount = $request->amount;
                $update->id_cate = $request->id_cate;
                $update->id_pro_type = $request->id_pro_type;
                $update->slug = utf8tourl($request->name);
                $update->description = $request->description;
                $update->brand = $request->brand;
                $update->discount = $request->discount;
                $update->stt = $request->stt;
                foreach ($update->Images_products as $file) {
                    @unlink(storage_path("/app/".$file->link));
                }
                $update->Images_products()->delete();
                $update->save();
//                dd($update);

                foreach ($request->photos as $photo){
                    $filename = $update->MaSP . '_' . $photo->getClientOriginalName();
                    $link = $photo->storeAs('/public/DarkAdmin/img/upload/products',$filename);
                    Images_products::create([
                        'id_product' => $update->id,
                        'filename' => $filename,
                        'link' => $link
                    ]);
                } return redirect()->action('CrudProController@index')->with('success','Successfully.');
            }else{
                return back()->with('error','Failed upload.');
            }
        }
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
        $prod = Products::find($id);
        $prod->delete();
        return response()->json(['success' => 'Đã xóa sản phẩm.']);
    }
}
