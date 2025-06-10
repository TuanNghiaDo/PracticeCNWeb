@extends('medecines.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-warning">
            Sửa thông tin thuốc
        </div>
        <div class="card-body">
            <form action="{{ route('medecines.update', $medecine->medecine_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                <label for="medecine_name" class="col-label-form col-sm-2">Tên thuốc</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="medecine_name" name="medecine_name" value="{{ $medecine->medecine_name }}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="product_date" class="col-label-form col-sm-2">Ngày sản xuất</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="product_date" name="product_date" value="{{ $medecine->product_date }}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="out_of_date" class="col-label-form col-sm-2">Ngày hết hạn</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="out_of_date" name="out_of_date" value="{{ $medecine->out_of_date }}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="medecine_type_id" class="col-label-form col-sm-2">Loại thuốc</label>
                <div class="col-sm-10">
                <select name="medecine_type_id" id="medecine_type_id" class="form-control">
                    <option value="">Chọn loại thuốc</option>
                    @foreach($medecineTypes as $medecineType)
                        <option value="{{ $medecineType->medecine_type_id }}" @if($medecineType->medecine_type_id == $medecine->medecine_type_id) selected @endif>{{ $medecineType->medecine_type_name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nhom_duoc_tinh" class="col-label-form col-sm-2">Nhóm dược tính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nhom_duoc_tinh" name="nhom_duoc_tinh" value="{{ $medecine->nhom_duoc_tinh }}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="des" name="des" value="{{ $medecine->des }}"/>
                </div>
            </div>
                <div class="text-center">
                    <a href="{{ route('medecines.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Sửa"/>
                </div>
            </form>
        </div>
    </div>
@endsection('content')