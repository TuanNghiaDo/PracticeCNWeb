@extends('departments.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-warning text-uppercase">
            {{-- Thông báo lỗi --}}
            {{-- Tiêu đề của trang --}}
            Sửa thông tin phòng
        </div>
        <div class="card-body">
            <form action="{{ route('departments.update', $department->DepartmentID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="DepartmentID" class="col-label-form col-sm-2">ID</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="DepartmentID" name="DepartmentID" value="{{ $department->DepartmentID }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="DepartmentName" class="col-label-form col-sm-2">Tên phòng ban</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="DepartmentName" name="DepartmentName" value="{{ $department->DepartmentName }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="DepartmentHeadID" class="col-label-form col-sm-2">Trưởng phòng</label>
                    <div class="col-sm-10">
                        <select class="col-sm-10 form-control" required id="DepartmentHeadID" name="DepartmentHeadID">
                            <option value="">Chọn trưởng phòng</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->EmployeeID}}" @if($employee->EmployeeID == $department->DepartmentHeadID) selected @endif>{{ $employee->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Quay lại</a>
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