@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chinh sua nhan su {{$nhansu->id}}</div>

                <div class="card-body">
                    <form action="{{ route('nhansu.update', $nhansu) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                            <div class="col-md-6">
                                <input id="ten_nhan_su" type="text" class="form-control" name="ten_nhan_su" value="{{ $nhansu->ten_nhan_su }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Loai nhan su</label>
                            <div class="col-md-6">
                                <input id="loai_nhan_su" type="text" class="form-control" name="loai_nhan_su" value="{{ $nhansu->loai_nhan_su }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ngay sinh</label>
                            <div class="col-md-6">
                                <input id="ngay_sinh" type="text" class="form-control" name="ngay_sinh" value="{{ $nhansu->ngay_sinh }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Gioi tinh</label>
                            <div class="col-md-6">
                                <input id="gioi_tinh" type="text" class="form-control" name="gioi_tinh" value="{{ $nhansu->gioi_tinh }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">So dien thoai</label>
                            <div class="col-md-6">
                                <input id="SDT" type="text" class="form-control" name="SDT" value="{{ $nhansu->SDT }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $nhansu->email }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Dan toc</label>
                            <div class="col-md-6">
                                <input id="dan_toc" type="text" class="form-control" name="dan_toc" value="{{ $nhansu->dan_toc }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Que quan</label>
                            <div class="col-md-6">
                                <input id="que_quan" type="text" class="form-control" name="que_quan" value="{{ $nhansu->que_quan }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">CMND</label>
                            <div class="col-md-6">
                                <input id="CMND" type="text" class="form-control" name="CMND" value="{{ $nhansu->CMND }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Trinh do</label>
                            <div class="col-md-6">
                                <input id="trinh_do" type="text" class="form-control" name="trinh_do" value="{{ $nhansu->trinh_do }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mo ta</label>
                            <div class="col-md-6">
                                <input id="mo_ta" type="text" class="form-control" name="mo_ta" value="{{ $nhansu->mo_ta }}" autofocus>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
