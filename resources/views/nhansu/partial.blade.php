{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center"> --}}

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Ma vai tro</th>
                            <th scope="col">Tu ngay</th>
                            <th scope="col">Den ngay</th>
                            <th scope="col">Mo ta</th>
                            <th scope="col">Luong co ban</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($vaitros as $vt)
                            <tr>
                                <td>{{$vt->ma_vai_tro}}</td>
                                <td>{{$vt->tu_ngay}}</td>
                                <td>{{$vt->den_ngay}}</td>
                                <td>{{$vt->mo_ta}}</td>
                                <td>{{$vt->luong_co_ban}}</td>
                                {{-- <td>
                                    <a href="{{ route('vaitro.edit', $vt->id) }}"><button type="button" class="btn btn-warning">EDIT</button>
                                    <form action="{{ route('vaitro.destroy', $vt->id) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td> --}}
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('nhansu.add_vai_tro_for_nhan_su', $nhansu->id) }}" class="btn btn-primary">Them moi vai tro cho nhan su</a>
                </div>
            </div>
        </div>
    {{-- </div>
</div>
@endsection --}}
