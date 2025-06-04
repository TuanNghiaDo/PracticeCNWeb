@extends('employees.master')
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
    <div class="card-header">Thêm nhân viên mới</div>
    <div class="card-body">
        <form action="{{ route('employees.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-label-form col-sm-2">Tên nhân viên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="birthday" class="col-label-form col-sm-2">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthday" name="birthday"/>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="roomId" class="col-label-form col-sm-2">Phòng</label>
                <div class="col-sm-10">
                    <select name="roomId" id="roomId" class="form-control">
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm"/>
            </div>
        </form>
    </div>
</div>
@endsection('content')