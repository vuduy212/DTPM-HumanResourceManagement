@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Them moi nhan su') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('nhansu.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ten nhan su *</label>
                            <div class="col-md-6">
                                <input id="ten_nhan_su" name="ten_nhan_su" type="text" value="{{ old('ten_nhan_su') }}" class="form-control @error('ten_nhan_su') is-invalid @enderror" >
                                @error('ten_nhan_su')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Loai nhan su*</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" name="loai_nhan_su" value="Nhan vien" checked>
                                    <label for="">Nhan vien</label>
                                    <input type="radio" name="loai_nhan_su" value="Ung vien">
                                    <label for="">Ung vien</label>
                                    <input type="radio" name="loai_nhan_su" value="Than nhan">
                                    <label for="">Than nhan</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ngay sinh*</label>
                            <div class="col-md-6">
                                <input id="ngay_sinh" name="ngay_sinh" type="date" value="{{ old('ngay_sinh') }}" class="form-control @error('ngay_sinh') is-invalid @enderror" >
                                @error('ngay_sinh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Gioi tinh*</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" name="gioi_tinh" value="0" checked>
                                    <label for="">Nam</label>
                                    <input type="radio" name="gioi_tinh" value="1">
                                    <label for="">Nu</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">So dien thoai</label>
                            <div class="col-md-6">
                                <input id="SDT" name="SDT" type="tel" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="email" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Dan toc</label>
                            <div class="col-md-6">
                                <input id="dan_toc" name="dan_toc" type="text" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Que quan</label>
                            <div class="col-md-6">
                                <input id="que_quan" name="que_quan" type="text" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">CMND</label>
                            <div class="col-md-6">
                                <input id="CMND" name="CMND" type="text" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Trinh do</label>
                            <div class="col-md-6">
                                <input id="trinh_do" name="trinh_do" type="text" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mo ta</label>
                            <div class="col-md-6">
                                <input id="mo_ta" name="mo_ta" type="text" class="form-control" >
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Vai tro</label>
                            <div class="col-md-12">
                                @include('nhansu.create_vaitro_nhansu_partial')
                            </div>
                        </div>
                        <br> --}}
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
