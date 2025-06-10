@extends('thietbis.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lí thiết bị</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('thietbis.create') }}" class="btn btn-success btn-sm float-end">Thêm thiết bị mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã thiết bị</th>
                <th>Tên thiết bị</th>
                <th>Mô tả</th>
                <th>Năm sản xuất</th>
                <th>Loại thiết bị</th>
                <th>Thao tác</th>
            </tr>
            @if(count($thietbis) > 0)
                @foreach($thietbis as $row)
                    <tr>
                        <td>{{ $row->ma_of_thietbi }}</td>
                        <td>{{ $row->ten_thiet_bi }}</td>
                        <td>{{ $row->mota_thiet_bi }}</td>
                        <td>{{ $row->nam_san_xuat}}</td>
                        <td>{{ $row->loai_thietbi->ten_loai_thietbi }}</td>
                        <td>
                            <form action="{{ route('thietbis.destroy', $row->ma_of_thietbi) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('thietbis.show', $row->ma_of_thietbi) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                <a href="{{ route('thietbis.edit', $row->ma_of_thietbi) }}" class="btn btn-warning btn-sm">Sửa</a>
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