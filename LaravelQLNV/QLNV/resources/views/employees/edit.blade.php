@extends('employees.master')
@section('content')
    <div class="card">
        <div class="card-header">
            Sửa thông tin nhân viên
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="name" class="col-label-form col-sm-2">Tên sinh viên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="birthday" class="col-label-form col-sm-2">Ngày sinh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="birthday" name="birthday" value="{{ $employee->birthday }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="roomId" class="col-label-form col-sm-2">Phòng</label>
                    <div class="col-sm-10">
                        <select name="roomId" id="roomId" class="form-control">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}" @if($employee->roomId == $room->id) selected @endif>
                                    {{ $room->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Sửa"/>
                </div>
            </form>
        </div>
    </div>
@endsection('content')