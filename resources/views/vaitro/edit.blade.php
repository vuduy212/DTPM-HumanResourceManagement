@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
                @endif

                <div class="card-header">Chinh sua vai tro {{$vaitro->id}}</div>
                <div class="card-body">
                    <form action="{{ route('vaitro.update', $vaitro) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ma to chuc*</label>
                            <div class="col-md-6">
                                <select name="ma_to_chuc" id="ma_to_chuc" class="form-select">
                                    <option value="" class="vegitable custom-select">Chọn tổ chức</option>
                                    @foreach($tochucs as $tochuc)
                                        <option value="{{$tochuc->id}}"
                                        @if($tochuc->id == $vaitro->ma_to_chuc) selected @endif>
                                            {{$tochuc->ten_to_chuc}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ten vai tro</label>
                            <div class="col-md-6">
                                <input id="ten_vai_tro" type="text" class="form-control" name="ten_vai_tro" value="{{ $vaitro->ten_vai_tro }}" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mo ta</label>
                            <div class="col-md-6">
                                <input id="mo_ta" type="text" class="form-control" name="mo_ta" value="{{ $vaitro->mo_ta }}" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Muc luong</label>
                            <div class="col-md-6">
                                <input id="muc_luong" type="text" class="form-control" name="muc_luong" value="{{ $vaitro->muc_luong }}" autofocus>
                            </div>
                        </div>
                        <br>
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
