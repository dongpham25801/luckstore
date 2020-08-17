@extends('admin.layouts.main')
@section('content')

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-description" style="font-size: 20px"> Thông tin <code style="font-size: 20px">cơ bản</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td class="text-light">Mã sản phẩm</td>
                                <td>{{ $prod->MaSP }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Tên sản phẩm</td>
                                <td>{{ $prod->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Slug</td>
                                <td>{{ $prod->slug }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Thương hiệu</td>
                                <td>{{ $prod->Brands->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Loại sản phẩm</td>
                                <td>{{ $prod->ProductType->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Danh mục</td>
                                <td>{{ $prod->Categories->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Trạng thái</td>
                                <td>
                                    @if($prod->stt == 1)
                                        {{ 'Hiển thị' }}
                                    @else
                                        {{ 'Không hiển thị' }}
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-description" style="font-size: 20px"> Thông tin <code style="font-size: 20px">chi tiết</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td class="text-light">Số lượng</td>
                                <td>{{ $prod->amount }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Đơn giá</td>
                                <td>{{ $prod->price }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Giá nhập</td>
                                <td>{{ $prod->entry_price }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Giá KM</td>
                                <td>
                                    @if($prod->promo_price == 0)
                                        {{ 'SP này không có KM' }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-light">Discount</td>
                                <td>
                                    @if($prod->discount == 0)
                                        {{ 'SP này không có Discount' }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-light">Ngày thêm</td>
                                <td>{{ $prod->created_at }}</td>
                            </tr>
                            <tr>
                                <td class="text-light">Cập nhật lần cuối</td>
                                <td>{{ $prod->updated_at }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Row -->

    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <label for="" class="col-form-label">Mô tả</label>
                    <p class="text-light">{{ $des }}</p>
                </div>
            </div>
        </div>
    </div> <!-- End Row -->

    <div class="row">
        @foreach($imgProd as $file)
            @php
                $formatImg = explode('/', $file->link);
                array_shift($formatImg);
                $newImg = implode('/', $formatImg);
            @endphp
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage') . '/' . $newImg }}" alt="Card image cap" width="150px" height="200px">
                <div class="card-footer">
                    <p class="card-text"><small class="text-muted" style="font-size: 14px">Last updated at {{ $file->updated_at }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div> <!-- End Row -->

@endsection
