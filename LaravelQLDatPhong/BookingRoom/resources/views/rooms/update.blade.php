@extends('rooms.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-warning text-uppercase">
            {{-- Thông báo lỗi --}}
            {{-- Tiêu đề của trang --}}
            Sửa thông tin phòng
        </div>
        <div class="card-body">
            <form action="{{ route('rooms.update', $room->RoomID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="RoomID" class="col-label-form col-sm-2">Mã phòng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="RoomID" name="RoomID" value="{{ $room->RoomID }}" readonly />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="RoomNumber" class="col-label-form col-sm-2">Số phòng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="RoomNumber" name="RoomNumber" value="{{ $room->RoomNumber }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="RoomType" class="col-label-form col-sm-2">Loại phòng</label>
                    <div class="col-sm-10">
                        <select class="col-sm-10 form-control" required id="RoomType" name="RoomType">
                            <option value="">Chọn loại phòng</option>
                            @foreach($roomTypes as $roomType)
                                <option value="{{ $roomType}}" @if($room->RoomType == $roomType) selected @endif>{{ $roomType}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Availability" class="col-label-form col-sm-2">Trạng thái</label>
                    <div class="col-sm-10">
                        <select class="col-sm-10 form-control" required id="Availability" name="Availability">
                            <option value="">Trạng thái</option>
                            @foreach($roomAvailability as $roomStatus)
                                <option value="{{ $roomStatus}}"@if($room->Availability == $roomStatus) selected @endif>{{ $roomStatus}}</option>
                            @endforeach
                         </select>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Quay lại</a>
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