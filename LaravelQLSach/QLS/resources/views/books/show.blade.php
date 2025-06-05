@extends('books.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>Thông tin sách chi tiết</b>
                </div>
                <div class="col col-md-6">
                    <a href="{{ route('books.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tên sách</b>
                </label>
                <div class="col-sm-10">{{ $book->title }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tác giả</b>
                </label>
                <div class="col-sm-10">{{ $book->author }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Thể loại</b>
                </label>
                <div class="col-sm-10">
                    {{ $book->genre }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Năm xuất bản</b>
                </label>
                <div class="col-sm-10">
                    {{ $book->publication_year }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>ISBN</b>
                </label>
                <div class="col-sm-10">
                    {{ $book->ISBN }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Link ảnh demo</b>
                </label>
                <div class="col-sm-10">
                    {{ $book->cover_image_url }}
                </div>
            </div>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection('content')