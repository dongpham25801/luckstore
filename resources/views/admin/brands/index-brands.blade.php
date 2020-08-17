@extends('admin.layouts.main')
@section('content')

    <button type="button" class="badge-info badge btn" data-toggle="modal" data-target="#addBrandModal">
        Add Brand
    </button>
    <br><br>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thương hiệu</h4>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Thumbnail</th>
                        <th>Date created</th>
                        <th>Last updated</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->slug }}</td>
                            <td>{{ $value->thumbnail }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->updated_at }}</td>
                            <td>
                                <button class="edit-brand btn btn-warning btn-sm" data-toggle="modal" data-target="#editBrandModal" data-id="{{ $value->id }}" data-url="">
                                    <i class="mdi mdi-pencil-box-outline"></i>
                                </button>
                                <button class="remove-brand btn btn-danger btn-sm" data-toggle="modal" data-target="#removeBrandModal" data-id="{{ $value->id }}" data-url="">
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
    @include('admin.brands.add-modal')
    @include('admin.brands.edit-modal')
    @include('admin.brands.remove-modal')

@endsection
