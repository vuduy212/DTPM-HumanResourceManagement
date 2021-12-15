<div class="col">
    <form action="{{ route('nhansu.them_vaitro_nhansu') }}" method="POST">
        @csrf
        <div class="form-group row">
            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">Vai tro</label> --}}
            <div class="col-md-12 mt-4">
                <div class="container-fluid">
                <h4 class="text-center  @error('tu_ngay') is-invalid @enderror" style="color:green"> Them vai tro cho nhan su {{$nhansu->ten_nhan_su}} </h4>
                @error('tu_ngay')
                    <span class="invalid-feedback" role="alert">
                        <strong>Vui lòng nhập chính xác ngày bắt đầu</strong>
                    </span>
                @enderror
                <div class="row">
                    <div class="col-md-12">
                        <table class="table" style="background-color:#e0e0e0;" >

                            <thead>
                                <tr>
                                    <th>Ma nhan su</th>
                                    <th>Vai tro</th>
                                    <th>Tu ngay</th>
                                    <th>Den ngay</th>
                                    <th>Mo ta</th>
                                    <th>Luong co ban</th>
                                </tr>
                            </thead>
                            <tbody id="">
                                <tr>
                                    <td>
                                        <select name="ma_nhan_su" id="ma_nhan_su" class="form-select">
                                            <option id={{$nhansu->id}} value={{$nhansu->id}}>{{$nhansu->ten_nhan_su}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="ma_vai_tro" id="ma_vai_tro" class="form-select">
                                            <option value="" class="vegitable custom-select">Chọn vai trò</option>
                                            @foreach($vt as $v)
                                                <option id="{{$v->id}}" value="{{$v->id}}" class="vegitable custom-select">
                                                    {{$v->ten_vai_tro}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="date" id="tu_ngay" name="tu_ngay" value="{{ old('tu_ngay') }}" class="form-control">
                                        
                                    </td>
                                    <td>
                                        <input type="date" id="den_ngay" name="den_ngay" value="{{ old('den_ngay') }}" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" id="mo_ta" name="mo_ta" value="{{ old('mo_ta') }}" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" id="luong_co_ban" name="luong_co_ban" min="0" value="{{ old('luong_co_ban') }}" class="form-control">
                                    </td>
                                    <td><button id="add" class="btn btn-success">Add</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                $('#add').on('click',function(){

                    var ma_nhan_su = $('select[name="ma_nhan_su"]').val();
                    var ma_vai_tro = $('select[name="ma_vai_tro"]').val();
                    var tu_ngay = $('input[name="tu_ngay"]').val();
                    var den_ngay = $('input[name="den_ngay"]').val();
                    var mo_ta = $('input[name="mo_ta"]').val();
                    var luong_co_ban = $('input[name="luong_co_ban"]').val();

                    if(ma_vai_tro!="" && tu_ngay!=""){
                        $.ajax({
                            url: location.origin + 'nhansu/them_vt_ns',
                            type: "POST",
                            data: {
                                ma_nhan_su: ma_nhan_su,
                                ma_vai_tro: ma_vai_tro,
                                tu_ngay: tu_ngay,
                                den_ngay: den_ngay,
                                mo_ta: mo_ta,
                                luong_co_ban: luong_co_ban,
                            },
                        });
                        // alert('Them vai tro ' + ma_vai_tro + ' !');
                    }
                    else{
                        alert('Vui lòng điền đầy đủ mã vai trò và ngày bắt đầu !');
                    }

                    //$('#new').append('<tr><td>'+ma_vai_tro+'</td><td>'+tu_ngay+'</td><td>'+den_ngay+'</td><td>'+mo_ta+'</td><td>'+luong_co_ban+'</td><td><button class="btn btn-danger btnDelete">DELETE</button></td></tr>');
                });

                // $('.btnDelete').on('click',function(){
                //     $(this).closest("tr").remove();
                // });
            });
        </script>
    </form>
    {{-- form them / form list --}}
    <div class="col-md-12  mt-4" style="background-color:#f5f5f5;">
        <div class="p-4">
            <div class="text-center">
                <h4>Cac vai tro cua nhan su {{$nhansu->ten_nhan_su}}</h4>
            </div>
        </div>
        <table id="" class="table">
            <thead>
                <tr>
                    <th>Vai tro</th>
                    <th>Tu ngay</th>
                    <th>Den ngay</th>
                    <th>Mo ta</th>
                    <th>Luong co ban</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="new">
                @foreach ($vaitros as $vt)
                <tr>
                    <td>{{$vt->ten_vai_tro}}</td>
                    <td>{{$vt->tu_ngay}}</td>
                    <td>{{$vt->den_ngay}}</td>
                    <td>{{$vt->mo_ta}}</td>
                    <td>{{$vt->luong_co_ban}}</td>
                    <td>
                        <form action="{{ route('nhansu.delete_vaitro_of_nhansu', $vt->id) }}" method="POST" class="float-left">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btnDelete">DELETE</button>
                        </form>
                    </td>
                    {{-- <td><button class="btn btn-danger btnDelete">DELETE</button></td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Jquery --}}
</div>
