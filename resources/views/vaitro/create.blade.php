@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Them moi vai tro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('vaitro.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ma to chuc*</label>
                            <div class="col-md-6">
                                <select name="ma_to_chuc" id="ma_to_chuc" class="form-select">
                                    <option value="" class="vegitable custom-select">Chọn tổ chức</option>
                                    @foreach($tochucs as $tochuc)
                                        <option id="{{$tochuc->id}}" value="{{$tochuc->id}}" class="vegitable custom-select">
                                            {{$tochuc->ten_to_chuc}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Select Room</label>
                            <div class="col-md-6">
                                <select name="room_id" class="form-select form-select-sm">
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">Room {{ $room->room_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br> --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tên vai trò*</label>
                            <div class="col-md-6">
                                <input id="ten_vai_tro" name="ten_vai_tro" type="text" value="{{ old('ten_vai_tro') }}" class="form-control @error('ten_vai_tro') is-invalid @enderror" >
                                @error('ten_vai_tro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mô tả</label>
                            <div class="col-md-6">
                                <input id="mo_ta" name="mo_ta" type="text" value="{{ old('mo_ta') }}" class="form-control @error('mo_ta') is-invalid @enderror" >
                                @error('mo_ta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mức lương</label>
                            <div class="col-md-6">
                                <input id="muc_luong" name="muc_luong" type="text" value="{{ old('muc_luong') }}" class="form-control @error('muc_luong') is-invalid @enderror" >
                                @error('muc_luong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Them
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
