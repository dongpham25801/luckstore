@extends('admin.layouts.main', ['title' => 'Danh mục'])
@section('content')

    <div class="row justify-content-sm-start">
        <div class="col-md-12">
            <button type="button" class="badge-info badge btn" data-toggle="modal" data-target="#addCateModal">
                Add category
            </button>
            <br><br>
            <div class="card border "> <!-- border-success -->
                <div class="card-body">
                    <h4 class="card-title">Quản lý danh mục</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Date created</th>
                                    <th>Last updated</th>
                                    <th style="text-align: right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cate as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>
                                        @if($row->stt == 1)
                                            {{ 'Hiển thị' }}
                                        @else
                                            {{ 'Không hiển thị' }}
                                        @endif
                                    </td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->updated_at }}</td>
                                    <td style="text-align: right">
                                        <button class="edit-cate btn btn-warning btn-sm" data-toggle="modal" data-target="#editCateModal" data-id="{{ $row->id }}" data-url="">
                                            <i class="mdi mdi-pencil-box-outline"></i>
                                        </button>
                                        <button class="remove-cate btn btn-danger btn-sm" data-toggle="modal" data-target="#removeCateModal" data-id="{{ $row->id }}" data-url="">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
{{--                        {{ $cate->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Modal--}}
    @include('admin.categories.add-modal')
    @include('admin.categories.edit-modal')
    @include('admin.categories.remove-modal')

@endsection
