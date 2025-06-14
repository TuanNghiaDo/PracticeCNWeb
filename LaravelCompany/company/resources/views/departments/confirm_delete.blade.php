@extends('departments.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-danger text-uppercase">
            {{-- Thông báo lỗi --}}
            {{-- Tiêu đề của trang --}}
            Xóa phòng
        </div>
         <div class="card-body">
            <form action="{{ route('departments.destroy', $department->DepartmentID) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="DepartmentID" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="DepartmentID" name="DepartmentID" value="{{ $department->DepartmentID }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="DepartmentName" class="col-label-form col-sm-2">Tên phòng ban</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="DepartmentName" name="DepartmentName" value="{{ $department->DepartmentName }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="DepartmentHeadID" class="col-label-form col-sm-2">Trưởng phòng</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="DepartmentHeadID" name="DepartmentHeadID" value="{{ $department->employee->Name }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa phòng này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('departments.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>
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