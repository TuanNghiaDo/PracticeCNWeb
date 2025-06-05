@extends('books.master')
@section('content')
    <div class="card">
        <div class="card-header">
            Xóa sách
        </div>
        <div class="card-body">
            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="id" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="id" name="id" value="{{ $book->id }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="title" class="col-label-form col-sm-2">Tên sách</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="title" name="title" value="{{ $book->title }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="author" class="col-label-form col-sm-2">Tác giả</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="author" name="author" value="{{ $book->author }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="genre" class="col-label-form col-sm-2">Thể loại</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="publication_year" class="col-label-form col-sm-2">Năm xuất bản</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="publication_year" name="publication_year" value="{{ $book->publication_year }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ISBN" class="col-label-form col-sm-2">ISBN</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="ISBN" name="ISBN" value="{{ $book->ISBN }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cover_image_url" class="col-label-form col-sm-2">Link ảnh demo</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="cover_image_url" name="cover_image_url" value="{{ $book->cover_image_url }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa sách này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('books.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection('content')