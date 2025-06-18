@extends('dishes.master')
@section('content')
    <div class="card">
        <div class="card-header text-center text-primary text-uppercase fw-bold">
             Thêm mon an mới
        </div>
        <div class="card-body">
            <form action="{{ route('dishes.store') }}"  method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="dish_name" class="col-label-form col-sm-2">Tên mon an</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dish_name" name="dish_name" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="type_id" class="col-label-form col-sm-2">Loại mon an</label>
                    <div class="col-sm-10">
                        <select name="type_id" id="type_id" class="form-select form-control">
                            <option value="">Chọn loại mon an</option>
                            @foreach($dishTypes as $type)
                                <option value="{{ $type->type_id }}">{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="des" class="col-label-form col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" id="des" name="des" />
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('dishes.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Thêm"/>
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