@extends('medicines.master')
@section('content')
    <div class="card">
        <div class="card-header text-center text-danger text-uppercase fw-bold">
            Xóa thuốc
        </div>
        <div class="card-body">
            <form action="{{ route('medicines.destroy', $medicine->medicine_id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="id" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="id" name="id" value="{{ $medicine->medicine_id }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="medicine_name" class="col-label-form col-sm-2">Tên thuốc</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="medicine_name" name="medicine_name" value="{{ $medicine->medicine_name}}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="type_id" class="col-label-form col-sm-2">Loại thuốc</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="type_id" name="type_id" value="{{ $medicine->medicineType->type_name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="product_date" class="col-label-form col-sm-2">Ngày sản xuất</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="product_date" name="product_date" value="{{ $medicine->product_date }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="expiry_date" class="col-label-form col-sm-2">Ngày hết hạn</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="expiry_date" name="expiry_date" value="{{ $medicine->expiry_date }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="des name="des value="{{ $medicine->des }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa thuốc này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('medicines.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection('content')