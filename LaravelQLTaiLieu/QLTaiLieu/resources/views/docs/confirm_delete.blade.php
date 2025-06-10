@extends('docs.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-danger">
            {{-- Tiêu đề của trang --}}
            Xóa tài liệu
        </div>
        <div class="card-body">
            <form action="{{ route('docs.destroy', $doc->doc_id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="doc_id" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="doc_id" name="doc_id" value="{{ $doc->doc_id }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="doc_name" class="col-label-form col-sm-2">Tên tài liệu</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="doc_name" name="doc_name" value="{{ $doc->doc_name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="doc_type_id" class="col-label-form col-sm-2">Loại tài liệu</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="doc_type_id" name="doc_type_id" value="{{ $doc->docType->doc_type_name }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa tài liệu này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('docs.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>                   
                </div>
            </form>
        </div>
    </div>
@endsection('content')