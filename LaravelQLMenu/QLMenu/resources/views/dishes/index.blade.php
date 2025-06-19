@extends('dishes.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center text-uppercase"><b>Quản lí món ăn</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('dishes.create') }}" class="btn btn-success btn-sm float-end">Thêm món ăn mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã món ăn</th>
                <th>Tên món ăn</th>
                <th>Loại món ăn</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
            @if(count($dishes) > 0)
                @foreach($dishes as $row)
                    <tr>
                        <td>{{ $row->dish_id }}</td>
                        <td>{{ $row->dish_name }}</td>
                        <td>{{ $row->dishType->type_name }}</td>
                        <td>{{ $row->des }}</td>
                        <td>   
                            <a href="{{ route('dishes.show', $row->dish_id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            <a href="{{ route('dishes.edit', $row->dish_id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="{{ route('dishes.confirmDelete', ['id' => $row->dish_id]) }}" class="btn btn-danger btn-sm">Xóa</a>
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