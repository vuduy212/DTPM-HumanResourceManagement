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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ten nhan su') }}</label>
                            <div class="col-md-6">
                                <input id="ten_nhan_su" name="ten_nhan_su" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Loai nhan su') }}</label>
                            <div class="col-md-6">
                                <input id="loai_nhan_su" name="loai_nhan_su" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ngay sinh') }}</label>
                            <div class="col-md-6">
                                <input id="ngay_sinh" name="ngay_sinh" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gioi tinh') }}</label>
                            <div class="col-md-6">
                                <input id="gioi_tinh" name="gioi_tinh" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('So dien thoai') }}</label>
                            <div class="col-md-6">
                                <input id="SDT" name="SDT" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Dan toc') }}</label>
                            <div class="col-md-6">
                                <input id="dan_toc" name="dan_toc" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Que quan') }}</label>
                            <div class="col-md-6">
                                <input id="que_quan" name="que_quan" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CMND') }}</label>
                            <div class="col-md-6">
                                <input id="CMND" name="CMND" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Trinh do') }}</label>
                            <div class="col-md-6">
                                <input id="trinh_do" name="trinh_do" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mo ta') }}</label>
                            <div class="col-md-6">
                                <input id="mo_ta" name="mo_ta" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
