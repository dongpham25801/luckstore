
@extends('admin.layouts.main')
@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thêm loại sản phẩm</h4>
            <form class="forms-sample" role="form" method="POST" action="{{ route('product-type.store') }}">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="namePtype">Tên loại sản phẩm</label>
                    <input type="text" class="form-control text-light namePtype" name="name" id="" placeholder="Loại sản phẩm">
{{--                    @error('name')--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    @enderror--}}
{{--                    @if($errors->has('name'))--}}
{{--                        <div class="alert-danger alert">{{ $errors->first('name') }}</div>--}}
{{--                    @endif--}}
                </div>
                <div class="form-group">
                    <label for="category_id">Danh mục</label>
                    <select class="form-control text-light category_id" name="cate_id" id="">
                        <option selected disabled>Danh mục</option>
                        @foreach($cate as $val)
                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sttPtype">Trạng thái</label>
                    <select class="form-control text-light sttPtype" name="stt" id="">
                        <option selected disabled>Trạng thái</option>
                        <option value="1">Hiển thị</option>
                        <option value="0">Không hiển thị</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-md mr-2">Create</button>
                <a href="/admin/product-type" class="btn btn-outline-light btn-md">Hủy</a>
            </form>
        </div>
    </div>

{{--    @if(session('alert'))--}}
{{--        <script type="text/javascript">--}}
{{--            toastr.success('{{ session('alert') }}','Thông báo',{timeOut: 3000});--}}
{{--        </script>--}}
{{--    @endif--}}
@endsection

{{--<div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <form id="#form-add-product-type" acction="{{ route('product-type.store') }}" role="form" method="POST"> <!-- action="" / data-url -->--}}
{{--                @method('POST')--}}
{{--                @csrf--}}
{{--                <div class="modal-header text-light" id="card-header">--}}
{{--                    <h5 class="modal-title">Thêm mới loại sản phẩm</h5>--}}
{{--                </div>--}}
{{--                <div class="modal-body px-4">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            --}}{{--                        <form role="form">--}}
{{--                            <fieldset class="form-group">--}}
{{--                                <label class="font-weight-bold">Loại sản phẩm</label>--}}
{{--                                <input class="form-control namePtype" name="name" placeholder="Nhập loại danh mục">--}}
{{--                                --}}{{--                                <span class="text-danger font-italic errorEditCatJS d-none"></span>--}}
{{--                            </fieldset>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Danh mục</label>--}}
{{--                                <select class="form-control category_id" name="cate_id" id="">--}}
{{--                                    <option selected disabled>Danh mục</option>--}}
{{--                                    @foreach($cate as $val)--}}
{{--                                        <option value="{{ $val->id }}">{{ $val->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Trạng thái</label>--}}
{{--                                <select class="form-control sttPtype" name="stt" id="">--}}
{{--                                    <option selected disabled>Trạng thái</option>--}}
{{--                                    <option value="1">Hiển thị</option>--}}
{{--                                    <option value="0">Không hiển thị</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            --}}{{--                        </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="submit" class="btn btn-sm badge badge-info" data-url="">Create</button>--}}
{{--                    <button class="btn btn-sm" type="button" data-dismiss="modal">Cancel</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
