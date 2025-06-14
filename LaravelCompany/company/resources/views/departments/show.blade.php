@extends('departments.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b class="text-uppercase text-success">Thông tin phòng ban chi tiết</b>
                </div>
                <div class="col col-md-6">
                    <a href="{{ route('departments.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Mã phòng ban</b>
                </label>
                <div class="col-sm-10">{{ $department->DepartmentID }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tên phòng ban</b>
                </label>
                <div class="col-sm-10">{{ $department->DepartmentName }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Trưởng phòng</b>
                </label>
                <div class="col-sm-10">
                    {{ $department->employee->Name ?? 'Không có' }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Số nhân viên</b>
                </label>
                <div class="col-sm-10">
                    {{ $department->hasEmployees->count() }}
                </div>
            </div>
            <a href="{{ route('departments.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection('content')