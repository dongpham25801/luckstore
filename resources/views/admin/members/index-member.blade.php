@extends('admin.layouts.main')
@section('content')

    <div class="row justify-content-sm-start">
        <div class="col-md-12">
            <button type="button" class="badge-info badge btn" data-toggle="modal" data-target="#addMemModal">
                Add User
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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Date created</th>
                                <th style="text-align: right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mem as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td style="text-align: right">
                                        <button class="edit-mem btn btn-warning btn-sm" data-toggle="modal" data-target="#editMemModal" data-id="{{ $row->id }}" data-url="">
                                            <i class="mdi mdi-pencil-box-outline"></i>
                                        </button>
                                        <button class="remove-mem btn btn-danger btn-sm" data-toggle="modal" data-target="#removeMemModal" data-id="{{ $row->id }}" data-url="">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $mem->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Modal--}}
    @include('admin.members.add-modal')
    @include('admin.members.edit-modal')
    @include('admin.members.remove-modal')

@endsection
