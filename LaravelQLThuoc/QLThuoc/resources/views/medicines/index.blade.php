@extends('medicines.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center text-uppercase"><b>Quản lí thuốc</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('medicines.create') }}" class="btn btn-success btn-sm float-end">Thêm thuốc mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã thuốc</th>
                <th>Tên thuốc</th>
                <th>Loại thuốc</th>
                <th>Nhóm dược tính</th>
                <th>Mô tả</th>
                <th>Ngày sản xuất</th>
                <th>Ngày hết hạn</th>
                <th>Thao tác</th>
            </tr>
            @if(count($medicines) > 0)
                @foreach($medicines as $row)
                    <tr>
                        <td>{{ $row->medicine_id }}</td>
                        <td>{{ $row->medicine_name }}</td>
                        <td>{{ $row->medicineType->type_name }}</td>
                        <td>{{ $row->medicinal_group }}</td>
                        <td>{{ $row->des }}</td>
                        <td>{{ $row->product_date }}</td>
                        <td>{{ $row->expiry_date }}</td>
                        <td>   
                            <a href="{{ route('medicines.show', $row->medicine_id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            <a href="{{ route('medicines.edit', $row->medicine_id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="{{ route('medicines.confirmDelete', ['id' => $row->medicine_id]) }}" class="btn btn-danger btn-sm">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Founded</td>
                </tr>
            @endif
        </table>
    </div>
</div>