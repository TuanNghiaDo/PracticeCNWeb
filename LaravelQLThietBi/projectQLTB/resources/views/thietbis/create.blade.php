@extends('students.master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">Thêm sinh viên mới</div>
    <div class="card-body">
        <form action="{{ route('students.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="StudentName" class="col-label-form col-sm-2">Tên sinh viên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="StudentName" name="StudentName"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="StudentName" class="col-label-form col-sm-2">Địa chỉ Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="StudentEmail" name="StudentEmail"/>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="StudentGender" class="col-label-form col-sm-2">Giới tính</label>
                <div class="col-sm-10">
                    <select name="StudentGender" id="StudentGender" class="form-control">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="ClassRoomID" class="form-label">Chọn lớp</label>
                <select name="ClassRoomID" id="ClassRoomID" class="form-control">
                    @foreach($classrooms as $classroom)
                        <option value="{{ $classroom->ClassroomID }}">{{ $classroom->ClassroomName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <a href="{{ route('students.index') }}" class="btn btn-primary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm"/>
            </div>
        </form>
    </div>
</div>
@endsection('content')