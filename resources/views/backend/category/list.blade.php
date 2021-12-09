@extends('backend.layouts.master')

@section('title', 'List Category')

@section('content')
    @if (\Session::has('success'))
        <div class="mt-5 alert alert-success alert-dismissible fade show" role="alert">
            {{ \Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span class="fa fa-times"></span>
            </button>
        </div>
    @endif
    <div class="card mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="header-title">{{ page_title()->getTitle() }}</h4>
                </div>
                <div class="col-md-6 clearfix">
                    <div class="pull-right">
                        <a href="{{ route('category.create') }}" class="btn btn-success mb-3">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-uppercase bg-light">
                            <tr>
                                <th data-title="name" scope="col">Trình liên kết</th>
                                <th class="text-center" data-title="status" scope="col">Trạng thái</th>
                                <th class="text-center" data-title="action" scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($categories))
                                @foreach ($categories as $cate)
                                    <tr>
                                        <td>{{ $cate['name'] }}</td>
                                        <td class="text-center">{{ $cate['status'] }}</td>
                                        <td class="text-center">
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3">
                                                    <a
                                                        class="text-secondary"
                                                        href="{{ route('category.update', $cate->id) }}"
                                                    >
                                                        <span class="ti-pencil"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('category.destroy', $cate->id) }}" class="text-danger"
                                                    >
                                                        <i class="ti-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
