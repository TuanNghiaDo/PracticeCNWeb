@extends('thietbis.master')
@section('content')
    <div class="card">
        <div class="card-header">
            Sửa thông tin thiết bị
        </div>
        <div class="card-body">
            <form action="{{ route('thietbis.update', $thietbi->ma_of_thietbi) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="ten_thiet_bi" class="col-label-form col-sm-2">Tên thiết bị</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ten_thiet_bi" name="ten_thiet_bi" value="{{ $thietbi->ten_thiet_bi }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="StudentEmail" class="col-label-form col-sm-2">Địa chỉ Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="StudentEmail" name="StudentEmail" value="{{ $student->StudentEmail }}"/>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="StudentGender" class="col-label-form col-sm-2">Giới tính</label>
                    <div class="col-sm-10">
                        <select name="StudentGender" id="StudentGender" class="form-control">
                            <option value="1" {{ $student->StudentGender == 1 ? 'selected' : '' }}>Nam</option>
                            <option value="0" {{ $student->StudentGender == 0 ? 'selected' : '' }}>Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ClassRoomID" class="form-label">Lớp</label>
                    <select name="ClassRoomID" id="ClassRoomID" class="form-select" required>
                        @foreach($classrooms as $classroom)
                            <option value="{{ $classroom->ClassroomID }}" @if($student->ClassroomID == $classroom->ClassroomID) selected @endif>
                                {{ $classroom->ClassroomName }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Sửa"/>
                </div>
            </form>
        </div>
    </div>
@endsection('content')