@extends('medicines.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b class="text-uppercase fw-bold text-success">Thông tin thuốc chi tiết</b>
                </div>
                <div class="col col-md-6">
                    <a href="{{ route('medicines.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh thuốc</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tên thuốc</b>
                </label>
                <div class="col-sm-10">{{ $medicine->medicine_id }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tác giả</b>
                </label>
                <div class="col-sm-10">{{ $medicine->medicine_name }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Loại thuốc</b>
                </label>
                <div class="col-sm-10">
                    {{ $medicine->medicineType->type_name }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Ngày sản xuất</b>
                </label>
                <div class="col-sm-10">
                    {{ $medicine->product_date }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Hạn sử dụng</b>
                </label>
                <div class="col-sm-10">
                    {{ $medicine->expiry_date }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Mô tả</b>
                </label>
                <div class="col-sm-10">
                    {{ $medicine->des }}
                </div>
            </div>
            <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection('content')