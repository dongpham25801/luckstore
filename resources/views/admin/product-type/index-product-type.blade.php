@extends('admin.layouts.main')
@section('content')
    <a href="{{ route('product-type.create') }}" class="badge-info badge btn"> {{--btn-rounded--}}
        Add Prodcut Types
    </a>
    <br><br>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Loại sản phẩm</h4>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Danh mục</th>
{{--                        <th>Date created</th>--}}
{{--                        <th>Last updated</th>--}}
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ptype as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->slug }}</td>
                        <td>
                            @if($value->stt == 1)
                                {{ 'Hiển thị' }}
                            @else
                                {{ 'Không hiển thị' }}
                            @endif
                        </td>
                        <td>{{ $value->Categories->name }}</td>
{{--                        <td></td>--}}
{{--                        <td></td>--}}
                        <td>
                            <button class="show-ptype btn btn-sm badge-primary" data-toggle="modal" data-target="#showProductTypeModal" data-id="{{ $value->id }}" data-url="{{ route('product-type.show',$value->id) }}">
                                <i class="mdi mdi-eye"></i>
                            </button>
                            <button class="edit-ptype btn btn-warning btn-sm" data-toggle="modal" data-target="#editProductTypeModal" data-id="{{ $value->id }}" data-url="">
                                <i class="mdi mdi-pencil-box-outline"></i>
                            </button>
                            <button class="remove-ptype btn btn-danger btn-sm" data-toggle="modal" data-target="#removeProductTypeModal" data-id="{{ $value->id }}" data-url="">
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Modal --}}
{{--    @include('admin.product-type.add-modal')--}}
    @include('admin.product-type.show-modal')
    @include('admin.product-type.edit-modal')
    @include('admin.product-type.remove-modal')
@endsection
