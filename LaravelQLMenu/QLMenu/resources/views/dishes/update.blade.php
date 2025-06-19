@extends('dishes.master')
@section('content')
    <div class="card">
        <div class="card-header  text-center text-warning text-uppercase fw-bold">
            Sửa thông tin món ăn
        </div>
        <div class="card-body">
            <form action="{{ route('dishes.update', $dish->dish_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="dish_id" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="dish_id" name="dish_id" value="{{ $dish->dish_id }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dish_name" class="col-label-form col-sm-2">Tên món ăn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dish_name" name="dish_name" value="{{ $dish->dish_name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="type_id" class="col-label-form col-sm-2">Loại món ăn</label>
                    <div class="col-sm-10">
                        <select name="type_id" id="type_id" class="form-select form-control">
                            @foreach($dishTypes as $type)
                                <option value="{{ $type->type_id }}" @if($dish->type_id == $type->type_id) selected @endif>{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="des" name="des" value="{{ $dish->des }}"/>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('dishes.index') }}" class="btn btn-secondary">Quay lại</a>
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