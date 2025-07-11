@extends('docs.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>Thông tin tài liệu chi tiết</b>
                </div>
                <div class="col col-md-6">
                    <a href="{{ route('docs.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tên tài liệu</b>
                </label>
                <div class="col-sm-10">{{ $doc->doc_id }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Tác giả</b>
                </label>
                <div class="col-sm-10">{{ $doc->doc_name }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Loại tài liệu</b>
                </label>
                <div class="col-sm-10">
                    {{ $doc->docType->doc_type_name }}
                </div>
            </div>
            <a href="{{ route('docs.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection('content')