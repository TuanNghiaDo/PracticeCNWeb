@extends('docs.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold">
            {{-- Tiêu đề của trang --}}
            Sửa thông tin tài liệu
        </div>
        <div class="card-body">
            <form action="{{ route('docs.update', $doc->doc_id) }}"  method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="doc_name" class="col-label-form col-sm-2">Tên tài liệu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="doc_name" name="doc_name" value="{{ $doc->doc_name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="doc_type_id" class="col-label-form col-sm-2">Loại tài liệu</label>
                    <div class="col-sm-10">
                        <select class="col-sm-10 form-control" required id="doc_type_id" name="doc_type_id">
                        @foreach($docTypes as $docType)
                            <option value="{{ $docType->doc_type_id }}" @if($doc->doc_type_id == $docType->doc_type_id) selected @endif>{{ $docType->doc_type_name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('docs.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Sửa"/>
                </div>
            </form>
        </div>
    </div>
@endsection('content')