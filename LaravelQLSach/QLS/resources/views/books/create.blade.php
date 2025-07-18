@extends('books.master')
@section('content')
    <div class="card">
        <div class="card-header">
             Thêm sách mới
        </div>
        <div class="card-body">
            <form action="{{ route('books.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="title" class="col-label-form col-sm-2">Tên sách</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="author" class="col-label-form col-sm-2">Tác giả</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" name="author"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="genre" class="col-label-form col-sm-2">Thể loại</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genre" name="genre" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="publication_year" class="col-label-form col-sm-2">Năm xuất bản</label>
                    <div class="col-sm-10">
                        <input type="number" min="1900" max="2025" step="1" placeholder="YYYY" required class="form-control" id="publication_year" name="publication_year" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ISBN" class="col-label-form col-sm-2">Năm xuất bản</label>
                    <div class="col-sm-10">
                        <input type="number" min="12345" required class="form-control" id="ISBN" name="ISBN" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cover_image_url" class="col-label-form col-sm-2">Link ảnh demo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cover_image_url" name="cover_image_url" />
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Thêm"/>
                </div>
            </form>
        </div>
    </div>
    @i
@endsection('content')