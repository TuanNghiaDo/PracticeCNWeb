@extends('medecines.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lí thuốc</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('medecines.create') }}" class="btn btn-success btn-sm float-end">Thêm thuốc mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã thuốc</th>
                <th>Tên thuốc</th>
                <th>Ngày sản xuất</th>
                <th>Ngày hết hạn</th>
                <th>Nhóm dược tính</th>
                <th>Loại thuốc</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
            @if(count($medecines) > 0)
                @foreach($medecines as $row)
                    <tr>
                        <td>{{ $row->medecine_id }}</td>
                        <td>{{ $row->medecine_name }}</td>
                        <td>{{ $row->product_date }}</td>
                        <td>{{ $row->out_of_date }}</td>
                        <td>{{ $row->nhom_duoc_tinh}}</td>
                        <td>{{ $row->medecineType->medecine_type_name}}</td>
                        <td>{{ $row->des}}</td>
                        <td>
                            <form action="{{ route('medecines.destroy', $row->medecine_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('medecines.show', $row->medecine_id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                <a href="{{ route('medecines.edit', $row->medecine_id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
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