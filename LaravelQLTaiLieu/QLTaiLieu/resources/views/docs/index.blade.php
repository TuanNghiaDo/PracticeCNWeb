@extends('docs.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lí tài liệu</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('docs.create') }}" class="btn btn-success btn-sm float-end">Thêm tài liệu mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã tài liệu</th>
                <th>Tên tài liệu</th>
                <th>Loại tài liệu</th>
                <th>Thao tác</th>
            </tr>
            @if(count($docs) > 0)
                @foreach($docs as $row)
                    <tr>
                        <td>{{ $row->doc_id }}</td>
                        <td>{{ $row->doc_name }}</td>
                        <td>{{ $row->docType->doc_type_name }}</td>
                        <td>   
                            <a href="{{ route('docs.show', $row->doc_id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            <a href="{{ route('docs.edit', $row->doc_id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="{{ route('docs.confirmDelete', ['id' => $row->doc_id]) }}" class="btn btn-danger btn-sm">Xóa</a>
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