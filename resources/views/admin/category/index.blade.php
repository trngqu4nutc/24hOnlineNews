@extends('layouts.admin')

@section('title')
    <title>test</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=>'Quản lý sản phẩm', 'key'=>'Thêm mới', 'url'=>'/products'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title" id="count_news"></h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-6">
                                                <input id="txt_seach" placeholder="Nhập tên" class="form-control"/>
                                            </div>
                                            <div class="col-md-4">
                                                <button id="btn_seach" title="tìm kiếm" class="btn btn-primary"><i
                                                        class="fas fa-search"></i></button>
                                                <button id="btn_refresh" title="tải lại" class="btn btn-secondary"><i
                                                        class="fas fa-redo"></i></button>
                                                <a class="btn btn-success" title="thêm mới"
                                                   href="#">
                                                    <i class="far fa-plus-square"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table-hover table">
                                    <thead>
                                    <tr>
                                        <th style="width: 60px">Id</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Hình ảnh</th>
                                        <th>Danh mục</th>
                                        <th style="width: 150px">
                                            Thao tác
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbl_data">
                                    {{--                                    @foreach($products as $product)--}}
                                    <tr>
                                        <td>id</td>
                                        <td>name</td>
                                        <td>price</td>
                                        <td>
                                            {{--                                                <img width="100" src="{{ asset($product->feature_image_path) }}"--}}
                                            {{--                                                     alt="{{ $product->feature_image_name }}"--}}
                                            {{--                                                />--}}
                                            img
                                        </td>
                                        {{--                                            <td>{{ optional($product->category)->name }}</td>--}}
                                        <td>category</td>
                                        <td>
                                            <a href="#"
                                               title="chỉnh sửa"
                                               class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <button title="xóa"
                                                    data-url="#"
                                                    class="btn_delete btn btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    {{--                                    @endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {{--                                {{ $products->links() }}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
