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
                <div class="card-header">Thong tin nhan su {{$nhansu->ten_nhan_su}}</div>

                <div class="card-body">
                    <form action="{{ route('nhansu.update', $nhansu) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Ten nhan su*</label>
                                    <div class="col-lg-6">
                                        <input id="ten_nhan_su" type="text" class="form-control" name="ten_nhan_su" value="{{ $nhansu->ten_nhan_su }}" autofocus>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Loai nhan su*</label>
                                    <div class="col-lg-6">
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

                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Ngay sinh*</label>
                                    <div class="col-lg-6">
                                        <input id="ngay_sinh" name="ngay_sinh" type="date" value="{{ $nhansu->ngay_sinh }}" class="form-control @error('ngay_sinh') is-invalid @enderror" >
                                        @error('ngay_sinh')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Gioi tinh*</label>
                                    <div class="col-lg-3">
                                        <div class="form-check">
                                            <input type="radio" name="gioi_tinh" value="0" @if($nhansu->gioi_tinh == 'nam') checked @endif>
                                            <label for="">Nam</label>
                                            <input type="radio" name="gioi_tinh" value="1" @if($nhansu->gioi_tinh == 'nu') checked @endif>
                                            <label for="">Nu</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">So dien thoai</label>
                                    <div class="col-lg-6">
                                        <input id="SDT" type="text" class="form-control" name="SDT" value="{{ $nhansu->SDT }}" autofocus>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Email</label>
                                    <div class="col-lg-6">
                                        <input id="email" type="text" class="form-control" name="email" value="{{ $nhansu->email }}" autofocus>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col">
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Dan toc</label>
                                    <div class="col-lg-6">
                                        <input id="dan_toc" type="text" class="form-control" name="dan_toc" value="{{ $nhansu->dan_toc }}" autofocus>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Que quan</label>
                                    <div class="col-lg-6">
                                        <input id="que_quan" type="text" class="form-control" name="que_quan" value="{{ $nhansu->que_quan }}" autofocus>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">CMND</label>
                                    <div class="col-lg-6">
                                        <input id="CMND" type="text" class="form-control" name="CMND" value="{{ $nhansu->CMND }}" autofocus>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Trinh do</label>
                                    <div class="col-lg-6">
                                        <select name="ma_vai_tro" id="ma_vai_tro" class="form-control">
                                            <option value="" class="vegitable custom-select">Ch???n tr??nh ?????</option>
                                            <option value="C???p 2" class="vegitable custom-select">C???p 2</option>
                                            <option value="C???p 3" class="vegitable custom-select">C???p 3</option>
                                            <option value="Cao ?????ng" class="vegitable custom-select">Cao ?????ng</option>
                                            <option value="?????i h???c" class="vegitable custom-select">?????i h???c</option>
                                            <option value="Th???c s???" class="vegitable custom-select">Th???c s???</option>
                                            <option value="Ti???n s???" class="vegitable custom-select">Ti???n s???</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label text-lg-right">Mo ta</label>
                                    <div class="col-lg-6">
                                        <input id="mo_ta" type="text" class="form-control" name="mo_ta" value="{{ $nhansu->mo_ta }}" autofocus>
                                    </div>
                                </div>
                                <br>
                                <button id="update" type="submit" class="btn btn-warning">
                                    Update
                                </button>
                            </div>
                        </div>

                    </form>
                    @include('nhansu.add_vai_tro')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
