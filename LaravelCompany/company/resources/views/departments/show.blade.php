@extends('rooms.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b class="text-uppercase text-success">Thông tin phòng chi tiết</b>
                </div>
                <div class="col col-md-6">
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Mã phòng</b>
                </label>
                <div class="col-sm-10">{{ $room->RoomID }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Số phòng</b>
                </label>
                <div class="col-sm-10">{{ $room->RoomNumber }}</div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Loại phòng</b>
                </label>
                <div class="col-sm-10">
                    {{ $room->RoomType }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">
                    <b>Trạng thái</b>
                </label>
                <div class="col-sm-10">
                    {{ $room->Availability }}
                </div>
            </div>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection('content')