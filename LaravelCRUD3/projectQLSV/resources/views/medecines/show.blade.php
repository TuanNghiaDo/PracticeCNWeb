@extends('medecines.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b class="text-center text-success">Thông tin thuốc chi tiết</b>
                </div>
                <div class="col col-md-6">
                    <a href="{{ route('medecines.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tên thuốc</b>
                </label>
                <div class="col-sm-10">{{ $medecine->medecine_name }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Ngày sản xuất</b>
                </label>
                <div class="col-sm-10">{{ $medecine->product_date }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Ngày hết hạn</b>
                </label>
                <div class="col-sm-10">
                    {{ $medecine->out_of_date }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Loại thuốc</b>
                </label>
                <div class="col-sm-10">
                    {{ $medecine->medecineType->medecine_type_name }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Nhóm dược tính</b>
                </label>
                <div class="col-sm-10">
                    {{ $medecine->nhom_duoc_tinh }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Mô tả</b>
                </label>
                <div class="col-sm-10">
                    {{ $medecine->des }}
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('medecines.index') }}" class="btn btn-secondary w-25 mx-auto">Quay lại</a>
    </div>
@endsection('content')