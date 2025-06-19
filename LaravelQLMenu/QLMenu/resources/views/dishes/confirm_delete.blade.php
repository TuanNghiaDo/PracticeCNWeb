@extends('dishes.master')
@section('content')
    <div class="card">
        <div class="card-header text-center text-danger text-uppercase fw-bold">
            Xóa món ăn
        </div>
        <div class="card-body">
            <form action="{{ route('dishes.destroy', $dish->dish_id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="id" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="id" name="id" value="{{ $dish->dish_id }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dish_name" class="col-label-form col-sm-2">Tên món ăn</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="dish_name" name="dish_name" value="{{ $dish->dish_name}}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="type_id" class="col-label-form col-sm-2">Loại món ăn</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="type_id" name="type_id" value="{{ $dish->dishType->type_name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="des name="des value="{{ $dish->des }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa món ăn này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('dishes.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection('content')