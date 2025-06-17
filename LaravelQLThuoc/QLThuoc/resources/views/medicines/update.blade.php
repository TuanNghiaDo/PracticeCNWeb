@extends('medicines.master')
@section('content')
    <div class="card">
        <div class="card-header  text-center text-warning text-uppercase fw-bold">
            Sửa thông tin thuốc
        </div>
        <div class="card-body">
            <form action="{{ route('medicines.update', $medicine->medicine_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="medicine_name" class="col-label-form col-sm-2">Tên thuốc</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="medicine_name" name="medicine_name" value="{{ $medicine->medicine_name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="type_id" class="col-label-form col-sm-2">Loại thuốc</label>
                    <div class="col-sm-10">
                        <select name="type_id" id="type_id" class="form-select form-control">
                            @foreach($medicineTypes as $type)
                                <option value="{{ $type->type_id }}" @if($medicine->type_id == $type->type_id) selected @endif>{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="medicinal_group" class="col-label-form col-sm-2">Nhóm dược tính</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="medicinal_group" name="medicinal_group" value="{{ $medicine->medicinal_group }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="des" name="des" value="{{ $medicine->des }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="product_date" class="col-label-form col-sm-2">Ngày sản xuất</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control" id="product_date" name="product_date" value="{{ $medicine->product_date }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="expiry_date" class="col-label-form col-sm-2">Ngày hết hạn</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control" id="expiry_date" name="expiry_date" value="{{ $medicine->expiry_date }}"/>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Sửa"/>
                </div>
            </form>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection('content')