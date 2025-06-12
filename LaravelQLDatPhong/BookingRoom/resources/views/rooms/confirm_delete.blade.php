@extends('rooms.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-danger text-uppercase">
            {{-- Thông báo lỗi --}}
            {{-- Tiêu đề của trang --}}
            Xóa phòng
        </div>
        <div class="card-body">
            <form action="{{ route('rooms.destroy', $room->RoomID) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3 row">
                    <label for="RoomID" class="col-label-form col-sm-2">Id</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="RoomID" name="RoomID" value="{{ $room->RoomID }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="RoomNumber" class="col-label-form col-sm-2">Số phòng</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="RoomNumber" name="RoomNumber" value="{{ $room->RoomNumber }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="RoomType" class="col-label-form col-sm-2">Loại phòng</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="RoomType" name="RoomType" value="{{ $room->RoomType }}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Availability" class="col-label-form col-sm-2">Trạng thái</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="Availability" name="Availability" value="{{ $room->Availability }}"/>
                    </div>
                </div>
                <div class="alert alert-danger">
                    <strong>Bạn có chắc chắn muốn xóa phòng này không?</strong>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('rooms.index') }}" class="btn btn-secondary btn-sm me-3">Quay lại</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')