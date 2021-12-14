@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                @if (session('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
                @endif
                <div class="card-header">Chinh sua nhan su {{$nhansu->ten_nhan_su}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('nhansu.update', $nhansu) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-inline">
                                    <div class="form-inline col-lg-12 mr-2">
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Ten nhan su*</label>
                                            <div class="col-lg-12">
                                                <input id="ten_nhan_su" type="text" class="form-control" name="ten_nhan_su" value="{{ $nhansu->ten_nhan_su }}" autofocus>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Loai nhan su*</label>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input type="radio" name="loai_nhan_su" value="Nhan vien" @if($nhansu->loai_nhan_su == 'Nhan vien') checked @endif>
                                                    <label for="">Nhan vien</label>
                                                    <input type="radio" name="loai_nhan_su" value="Ung vien" @if($nhansu->loai_nhan_su == 'Ung vien') checked @endif>
                                                    <label for="">Ung vien</label>
                                                    <input type="radio" name="loai_nhan_su" value="Than nhan" @if($nhansu->loai_nhan_su == 'Than nhan') checked @endif>
                                                    <label for="">Than nhan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Ngay sinh*</label>
                                            <div class="col-lg-12">
                                                <input id="ngay_sinh" name="ngay_sinh" type="date" value="{{ $nhansu->ngay_sinh }}" class="form-control @error('ngay_sinh') is-invalid @enderror" >
                                                @error('ngay_sinh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Gioi tinh*</label>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input type="radio" name="gioi_tinh" value="0" @if($nhansu->gioi_tinh == '0') checked @endif>
                                                    <label for="">Nam</label>
                                                    <input type="radio" name="gioi_tinh" value="1" @if($nhansu->gioi_tinh == '1') checked @endif>
                                                    <label for="">Nu</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">So dien thoai</label>
                                            <div class="col-lg-12">
                                                <input id="SDT" type="text" class="form-control" name="SDT" value="{{ $nhansu->SDT }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Email</label>
                                            <div class="col-lg-12">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ $nhansu->email }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="form-inline col-lg-12">
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Dan toc</label>
                                            <div class="col-lg-12">
                                                <input id="dan_toc" type="text" class="form-control" name="dan_toc" value="{{ $nhansu->dan_toc }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Que quan</label>
                                            <div class="col-lg-12">
                                                <input id="que_quan" type="text" class="form-control" name="que_quan" value="{{ $nhansu->que_quan }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">CMND</label>
                                            <div class="col-lg-12">
                                                <input id="CMND" type="text" class="form-control" name="CMND" value="{{ $nhansu->CMND }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Trinh do</label>
                                            <div class="col-lg-12">
                                                <input id="trinh_do" type="text" class="form-control" name="trinh_do" value="{{ $nhansu->trinh_do }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="name" class="col-lg-3 col-form-label text-lg-right">Mo ta</label>
                                            <div class="col-lg-12">
                                                <input id="mo_ta" type="text" class="form-control" name="mo_ta" value="{{ $nhansu->mo_ta }}" autofocus>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>

                                <button id="update" type="submit" class="btn btn-warning">
                                    Update
                                </button>
                            </form>
                        </div>

                        @include('nhansu.add_vai_tro')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
