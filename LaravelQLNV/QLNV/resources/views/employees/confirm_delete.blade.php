@extends('employees.master')
@section('content')
    <div class="card">
        <div class="card-header">
            Xóa nhân viên
        </div>
        <div class="card-body">
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="id" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="id" name="id" value="{{ $employee->id }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-label-form col-sm-2">Tên nhân viên</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="birthday" class="col-label-form col-sm-2">Ngày sinh</label>
                    <div class="col-sm-10">
                        <input readonly type="date" class="form-control" id="birthday" name="birthday" value="{{ $employee->birthday }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="roomId" class="col-label-form col-sm-2">Phòng</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="roomId" name="roomId" value="{{ $employee->room->name }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa nhân viên này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection('content')