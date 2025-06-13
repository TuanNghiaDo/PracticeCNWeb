@extends('rooms.master')
@section('content')
    <div class="card">
        <div class="card-header text-center fw-bold text-primary">
             Thêm phòng mới
        </div>
        <div class="card-body">
            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="RoomNumber" class="col-label-form col-sm-2">Tên phòng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="RoomNumber" name="RoomNumber" />
                        @error('RoomNumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="RoomType" class="col-label-form col-sm-2">Loại phòng</label>
                    <div class="col-sm-10">
                        <select class="col-sm-10 form-control" required id="RoomType" name="RoomType">
                            <option value="">Chọn loại phòng</option>
                            @foreach($roomTypes as $roomType)
                                <option value="{{ $roomType}}">{{ $roomType}}</option>
                            @endforeach
                        </select>
                        @error('RoomType')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Availability" class="col-label-form col-sm-2">Trạng thái</label>
                    <div class="col-sm-10">
                        <select class="col-sm-10 form-control" required id="Availability" name="Availability">
                            <option value="">Trạng thái</option>
                            @foreach($roomAvailability as $roomStatus)
                                <option value="{{ $roomStatus}}">{{ $roomStatus}}</option>
                            @endforeach
                         </select>
                        @error('Availability')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Thêm"/>
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