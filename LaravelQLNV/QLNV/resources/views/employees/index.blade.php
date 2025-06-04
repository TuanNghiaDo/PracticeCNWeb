@extends('employees.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lí nhân viên</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm float-end">Thêm nhân viên mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Ngày sinh</th>
                <th>Phòng</th>
                <th>Thao tác</th>
            </tr>
            @if(count($employees) > 0)
                @foreach($employees as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->birthday }}</td>
                        <td>{{ $row->room->name }}</td>
                        <td>
                            <form action="{{ route('employees.destroy', $row->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('employees.show', $row->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                <a href="{{ route('employees.edit', $row->id) }}" class="btn btn-warning btn-sm">Sửa</a>
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