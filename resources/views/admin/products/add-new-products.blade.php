@extends('admin.layouts.main')
@section('content')


{{--    <div class="col-12 grid-margin">--}}
        <h4 class="card-title">Thêm sản phẩm</h4>
        <hr style="background: limegreen">
        <div class="card"> <!--border-primary-->
            <div class="card-body">

                <form action="{{ route('products.store') }}" class="form-sample" role="form" enctype="multipart/form-data" method="POST">
{{--                    @method(POST)--}}
                    @csrf
{{--                    <p class="card-description"> Personal info </p>--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mã sản phẩm</label>
                                <div class="col-sm-9">
                                    <input name="MaSP" type="text" class="form-control codeProduct" placeholder="Nhập mã sản phẩm">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Số lượng</label>
                                <div class="col-sm-9">
                                    <input name="amount" type="number" class="form-control" placeholder="" min="2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Đơn giá</label>
                                <div class="col-sm-9">
                                    <input name="price" type="number" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giá nhập</label>
                                <div class="col-sm-9">
                                    <input name="entry_price" type="number" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giá KM</label>
                                <div class="col-sm-9">
                                    <input name="promo_price" type="number" class="form-control" value="0" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="card-description"></p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Loại sản phẩm</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="id_pro_type">
                                        @foreach($producttype as $ptypes)
                                            <option value="{{ $ptypes->id }}">{{ $ptypes->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Danh mục sản phẩm</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="id_cate">
                                        @foreach($cate as $categories)
                                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thương hiệu</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="brand">
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Trạng thái</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="stt">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Không hiển thị</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="card-description"></p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Ảnh thu nhỏ</label>
                                <div class="col-md-9">
                                    <input type="file" name="thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Chọn hình ảnh</label>
                                <div class="col-md-9">
                                    <input type="file" name="photos[]" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="">Mô tả</label>
                        <textarea class="form-control" id="descript" rows="4" name="description"></textarea> <!-- id="descript" -->
                    </div>

                    <p class="card-description"></p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn-sm btn badge-outline-info badge" type="submit">Add Product</button>
                                <button class="btn-sm btn badge-outline-primary badge" type="reset">Reset</button>
                                <a href="{{ URL::previous() }}" class="btn-sm btn badge-outline-light badge" type="button">Back</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
{{--    </div>--}}
@endsection




{{--<div class="col-md-6">--}}
{{--    <div class="form-group row">--}}
{{--        <label class="col-sm-3 col-form-label">Membership</label>--}}
{{--        <div class="col-sm-4">--}}
{{--            <div class="form-check">--}}
{{--                <label class="form-check-label">--}}
{{--                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Free <i class="input-helper"></i></label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-5">--}}
{{--            <div class="form-check">--}}
{{--                <label class="form-check-label">--}}
{{--                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional <i class="input-helper"></i></label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
