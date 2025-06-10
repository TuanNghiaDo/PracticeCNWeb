@extends('medecines.master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">Thêm thuốc mới</div>
    <div class="card-body">
        <form action="{{ route('medecines.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="medecine_name" class="col-label-form col-sm-2">Tên thuốc</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="medecine_name" name="medecine_name"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="product_date" class="col-label-form col-sm-2">Ngày sản xuất</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="product_date" name="product_date"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="out_of_date" class="col-label-form col-sm-2">Ngày hết hạn</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="out_of_date" name="out_of_date"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="medecine_type_id" class="col-label-form col-sm-2">Loại thuốc</label>
                <div class="col-sm-10">
                <select name="medecine_type_id" id="medecine_type_id" class="form-control">
                    <option value="">Chọn loại thuốc</option>
                    @foreach($medecineTypes as $medecinType)
                        <option value="{{ $medecinType->medecine_type_id }}">{{ $medecinType->medecine_type_name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nhom_duoc_tinh" class="col-label-form col-sm-2">Nhóm dược tính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nhom_duoc_tinh" name="nhom_duoc_tinh"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="des" name="des"/>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('medecines.index') }}" class="btn btn-primary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm"/>
            </div>
        </form>
    </div>
</div>
@endsection('content')