@extends('admin.layouts.main')
@section('content')

    <div class="row">
        <div class="col-md-9">
            <h4 class="card-title">Quản lý Sản phẩm</h4>
        </div>
        <div class="col-md-3 text-right">
            <a href="{{ route('products.create') }}" class="badge-info badge btn">Thêm sản phẩm</a>
        </div>
    </div>
    <p class="card-description"></p>
    <div class="card">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã SP</th>
                        <th>Tên SP</th>
                        <th>Đơn giá</th>
                        <th>SL</th>
                        <th>Trạng thái</th>
                        <th>Thương hiệu</th>
                        <th>Loại SP</th>
                        <th>Danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prod as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->MaSP }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ number_format($value->price) }}</td>
                            <td>{{ $value->amount }}</td>
                            <td>
                                @if($value->stt == 1)
                                    {{ 'Hiển thị' }}
                                @else
                                    {{ 'Không hiển thị' }}
                                @endif
                            </td>
                            <td>{{ $value->Brands->name }}</td>
                            <td>{{ $value->ProductType->name }}</td>
                            <td>{{ $value->Categories->name }}</td>
                            <td>
                                <a href="{{ route('products.show',$value->id) }}" class="btn btn-sm badge-primary">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a href="{{ route('products.edit',$value->id) }}" class="btn btn-sm badge-warning">
                                    <i class="mdi mdi-pencil-box-outline"></i>
                                </a>
                                <button class="remove-product btn btn-danger btn-sm" data-toggle="modal" data-target="#removeProductModal" data-id="{{ $value->id }}" data-url="">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $prod->links() }}
            </div>
{{--        </div>--}}
    </div>

    {{--Modal--}}
    @include('admin.products.remove-modal')
@endsection
