@extends('rooms.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center text-uppercase"><b>Quản lí phòng</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('rooms.create') }}" class="btn btn-success btn-sm float-end">Thêm phòng mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã phòng</th>
                <th>Số phòng</th>
                <th>Loại phòng</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            @if(count($rooms) > 0)
                @foreach($rooms as $row)
                    <tr>
                        <td>{{ $row->RoomID }}</td>
                        <td>{{ $row->RoomNumber }}</td>
                        <td>{{ $row->RoomType }}</td>
                        <td>{{ $row->Availability }}</td>
                        <td>   
                            <a href="{{ route('rooms.show', $row->RoomID) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            <a href="{{ route('rooms.edit', $row->RoomID) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="{{ route('rooms.confirmDelete', ['id' => $row->RoomID]) }}" class="btn btn-danger btn-sm">Xóa</a>
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