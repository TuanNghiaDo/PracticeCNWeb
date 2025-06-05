@extends('books.master')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lí sách</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('books.create') }}" class="btn btn-success btn-sm float-end">Thêm sách mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã sách</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Thể loại</th>
                <th>Năm xuất bản</th>
                <th>ISBN</th>
                <th>Link ảnh demo</th>
                <th>Thao tác</th>
            </tr>
            @if(count($books) > 0)
                @foreach($books as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->author }}</td>
                        <td>{{ $row->genre }}</td>
                        <td>{{ $row->publication_year }}</td>
                        <td>{{ $row->ISBN }}</td>
                        <td>{{ $row->cover_image_url }}</td>
                        <td>   
                            <a href="{{ route('books.show', $row->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                            <a href="{{ route('books.edit', $row->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="{{ route('books.confirmDelete', ['id' => $row->id]) }}" class="btn btn-danger btn-sm">Xóa</a>
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