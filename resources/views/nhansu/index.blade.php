@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h1 class="mt-4">Quan ly nhan su</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome to Quan ly nhan su !!</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('nhansu.create') }}" class="btn btn-primary">Them moi nhan su</a>
                </div>
                <form action="{{ route('nhansu.index') }}" method="GET" class="md-3 d-flex">
                    <input type="text" class="form-control" name="key" value="{{request('key')}}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ten</th>
                            <th scope="col">Loai nhan su</th>
                            <th scope="col">Ngay sinh</th>
                            <th scope="col">Gioi tinh</th>
                            <th scope="col">SDT</th>
                            <th scope="col">Email</th>
                            <th scope="col">Vai tro</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($nhansu as $ns)
                            <tr>
                                <th scope="row">{{$ns->id}}</th>
                                <td>{{$ns->ten_nhan_su}}</td>
                                <td>{{$ns->loai_nhan_su}}</td>
                                <td>{{$ns->ngay_sinh}}</td>
                                <td>
                                    @if($ns->gioi_tinh == '0') Nam
                                    @else Nu
                                    @endif
                                </td>
                                <td>{{$ns->SDT}}</td>
                                <td>{{$ns->email}}</td>
                                <td>{{$ns->vai_tros()->pluck('ten_vai_tro')->last()}}</td>
                                {{-- <td>{{ implode(', ', $ns->vai_tros()->get()->pluck('ten_vai_tro')->toArray()) }}</td> --}}
                                <td>
                                    <a href="{{ route('nhansu.show', $ns->id) }}"><button type="button" class="btn btn-success">DETAIL</button></a>
                                    <a href="{{ route('nhansu.edit', $ns->id) }}"><button type="button" class="btn btn-warning">EDIT</button></a>
                                    <form action="{{ route('nhansu.destroy', $ns->id) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$nhansu->appends(request()->only('key','number'))->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
