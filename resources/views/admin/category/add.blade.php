@extends('layouts.admin')

@section('title')
    <title>Thêm mới thể loại</title>
@endsection

@section('script')
    @if($errors->any())
        <script>
            @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
            @endforeach
        </script>
    @endif
@endsection

@section('content')
    @include('partials.content-header', ['name'=>'Quản lý thể loại', 'key'=>'Thêm mới', 'url'=>route('categories.index')])

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row card-body">
                    <div class="col-md-4">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="name" type="text"
                                       placeholder="Nhập tên danh mục"/>
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">-- Chọn danh mục cha --</option>
                                    {!! $htmlOptions !!}
                                </select>
                            </div>
                            <input class="btn btn-block btn-primary" type="submit" value="Thêm mới">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
