@extends('admin.layouts.main')
@section('content')

    <div class="card"> <!--border-primary-->
        <div class="card-header">
            <h4 class="card-title text-success font-weight-bold">Chỉnh sửa sản phẩm</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update',$prod->id) }}" class="form-sample" role="form" enctype="multipart/form-data" method="POST">
                @method('PATCH')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-9">
                                <input name="MaSP" type="text" class="form-control codeProduct" value="{{ $prod->MaSP }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" value="{{ $prod->name }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Số lượng</label>
                            <div class="col-sm-9">
                                <input name="amount" type="number" class="form-control" value="{{ $prod->amount }}" min="2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Đơn giá</label>
                            <div class="col-sm-9">
                                <input name="price" type="number" class="form-control" value="{{ $prod->price }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Giá nhập</label>
                            <div class="col-sm-9">
                                <input name="entry_price" type="number" class="form-control" value="{{ $prod->entry_price }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Giá KM</label>
                            <div class="col-sm-9">
                                <input name="promo_price" type="number" class="form-control" value="0" value="{{ $prod->promo_price }}">
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
                                    @if ($prod->id_pro_type == $ptypes->id)
                                    <option value="{{ $ptypes->id }}" selected>{{ $ptypes->name }}</option>
                                    @else
                                        <option value="{{ $ptypes->id }}">{{ $ptypes->name }}</option>
                                    @endif
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
                    <textarea class="form-control" id="descript" rows="4" name="description">{{ $prod->description }}</textarea> <!-- id="descript" -->
                </div>

                <p class="card-description"></p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn-sm btn badge-outline-info badge" type="submit">Save changes</button>
                            <button class="btn-sm btn badge-outline-primary badge" type="reset">Reset</button>
                            <a href="{{ URL::previous() }}" class="btn-sm btn badge-outline-light badge" type="button">Back</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
