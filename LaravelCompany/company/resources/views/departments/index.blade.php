@extends('departments.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center text-uppercase"><b>Quản lí phòng ban</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('departments.create') }}" class="btn btn-success btn-sm float-end">Thêm phòng ban mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã phòng ban</th>
                <th>Tên phòng ban</th>
                <th>Trưởng phòng ban</th>
                <th>Số nhân viên</th>
                <th>Thao tác</th>
            </tr>
            @if(count($departments) > 0)
                @foreach($departments as $row)
                    <tr>
                        <td>{{ $row->DepartmentID }}</td>
                        <td>{{ $row->DepartmentName }}</td>
                        <td>@if(!$row->employee) Không có @else {{ $row->employee->Name }} @endif</td>
                        <td>{{ $row->hasEmployees->count() }}</td> {{-- Tên hàm quan hệ quy đổi --}}
                        <td>   
                            <a href="{{ route('departments.show', $row->DepartmentID) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            <a href="{{ route('departments.edit', $row->DepartmentID) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="{{ route('departments.confirmDelete', ['id' => $row->DepartmentID]) }}" class="btn btn-danger btn-sm">Xóa</a>
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