@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h1 class="mt-4">Quan ly Vai tro</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome to Quan ly vai tro !!</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('vaitro.create') }}" class="btn btn-primary">Them moi vai tro</a>
                </div>
                <form action="{{ route('vaitro.index') }}" method="GET" class="md-3 d-flex">
                    <input type="text" class="form-control" name="key" value="{{request('key')}}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <!-- <th scope="col">Ma to chuc</th> -->
                            <th scope="col">Ten vai tro</th>
                            <th scope="col">Mo ta</th>
                            <th scope="col">Muc luong</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($vaitro as $vt)
                            <tr>
                                <th scope="row">{{$vt->id}}</th>
                                <!-- <td>{{$vt->ma_to_chuc}}</td> -->
                                <td>{{$vt->ten_vai_tro}}</td>
                                <td>{{$vt->mo_ta}}</td>
                                <td>{{$vt->muc_luong}}</td>
                                <td>
                                    <a href="{{ route('vaitro.show', $vt->id) }}"><button type="button" class="btn btn-success">DETAIL</button></a>
                                    <a href="{{ route('vaitro.edit', $vt->id) }}"><button type="button" class="btn btn-warning">EDIT</button>
                                    <form action="{{ route('vaitro.destroy', $vt->id) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$vaitro->appends(request()->only('key','number'))->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
