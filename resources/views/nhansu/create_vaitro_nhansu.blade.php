@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Them moi vai tro cho nhan su {{ $nhansu->ten_nhan_su }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('nhansu.luu_vai_tro_for_nhan_su', $nhansu) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Nhan su</label>
                            <div class="col-md-6">
                                <select name="ma_nhan_su" class="form-select form-select-sm">
                                    <option value="{{ $nhansu->id }}">{{ $nhansu->ten_nhan_su }}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Chon vai tro</label>
                            <div class="col-md-6">
                                <select name="ma_vai_tro" class="form-select form-select-sm">
                                    @foreach ($vaitros as $vaitro)
                                        <option value="{{ $vaitro->id }}">{{ $vaitro->ten_vai_tro }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tu ngay *</label>
                            <div class="col-md-6">
                                <input id="tu_ngay" name="tu_ngay" type="text" value="{{ old('tu_ngay') }}" class="form-control @error('tu_ngay') is-invalid @enderror" >
                                @error('tu_ngay')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Den ngay</label>
                            <div class="col-md-6">
                                <input id="den_ngay" name="den_ngay" type="text" value="{{ old('den_ngay') }}" class="form-control @error('den_ngay') is-invalid @enderror" >
                                @error('den_ngay')
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Luong co ban</label>
                            <div class="col-md-6">
                                <input id="luong_co_ban" name="luong_co_ban" type="text" value="{{ old('luong_co_ban') }}" class="form-control @error('luong_co_ban') is-invalid @enderror" >
                                @error('luong_co_ban')
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
