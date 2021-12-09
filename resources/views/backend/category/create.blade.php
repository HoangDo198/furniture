@extends('backend.layouts.master')

@section('title', 'Create Category')

@section('content')
<!-- basic form start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">{{ page_title()->getTitle() }}</h4>
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="categoryName">Tên</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name" id="categoryName"
                        aria-describedby="nameHelp"
                        autocomplete="off"
                        placeholder="Nhập tên danh mục"
                    >
                    @if (count($errors) > 0)
                        @if(isset($errors->getMessages()['name']))
                            @foreach($errors->getMessages()['name'] as $msg)
                                <small id="emailHelp" class="form-text text-danger">
                                    {{$msg}}
                                </small>
                            @endforeach
                        @endif
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-form-label">Liên kết cấp cha</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Trình liên kết đơn</option>
                        @if (isset($category))
                            @foreach ($category as $cate)
                                <option value="{{$cate['value']}}">
                                    {{ $cate['name'] }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoryOrder">Độ nặng</label>
                    <input
                        type="number" class="form-control"
                        name="order" id="categoryOrder"
                        aria-describedby="nameHelp"
                        value="0"
                    >
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<!-- basic form end -->
@endsection
