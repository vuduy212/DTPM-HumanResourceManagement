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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ma to chuc *</label>
                            <div class="col-md-6">
                                <input id="ma_to_chuc" name="ma_to_chuc" type="text" value="{{ old('ma_to_chuc') }}" class="form-control @error('ma_to_chuc') is-invalid @enderror" >
                                @error('ma_to_chuc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ten vai tro *</label>
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mo ta</label>
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Muc luong</label>
                            <div class="col-md-6">
                                <input id="muc_luong" name="muc_luong" type="text" value="{{ old('muc_luong') }}" class="form-control @error('muc_luong') is-invalid @enderror" >
                                @error('muc_luong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
