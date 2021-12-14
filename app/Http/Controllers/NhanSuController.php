<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNhanSuRequest;
use App\Http\Requests\CreateVaiTroForNhanSuRequest;
use App\Models\NhanSu;
use App\Models\VaiTro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhanSuController extends Controller
{
    protected $nhansu;

    public function __construct(NhanSu $nhansu)
    {
        $this->nhansu = $nhansu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nhansu = $this->nhansu->search($request->all());
        return view('nhansu.index', compact('nhansu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaitros = VaiTro::all();
        return view('nhansu.create', compact('vaitros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNhanSuRequest $request)
    {
        $this->nhansu->saveNhanSu($request);
        return redirect(route('nhansu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NhanSu  $nhansu
     * @return \Illuminate\Http\Response
     */
    public function show(NhanSu $nhansu)
    {
        return view('nhansu.show', compact('nhansu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NhanSu  $nhansu
     * @return \Illuminate\Http\Response
     */
    public function edit(NhanSu $nhansu)
    {
        $vt = VaiTro::all();

        $vaitros = DB::table('ns_vt')
        ->join('vai_tros', 'ns_vt.ma_vai_tro', '=', 'vai_tros.id')
        ->join('nhan_sus', 'ns_vt.ma_nhan_su', '=', 'nhan_sus.id')
        ->where('ns_vt.ma_nhan_su', '=', $nhansu->id)
        ->select('ns_vt.*', 'vai_tros.ten_vai_tro')
        ->orderBy('tu_ngay', 'DESC')
        ->get();

        return view('nhansu.edit', compact('nhansu', 'vaitros', 'vt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NhanSu  $nhansu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhanSu $nhansu)
    {
        $nhansu->ten_nhan_su = $request->ten_nhan_su;
        $nhansu->loai_nhan_su = $request->loai_nhan_su;
        $nhansu->ngay_sinh = $request->ngay_sinh;
        $nhansu->gioi_tinh = $request->gioi_tinh;
        $nhansu->SDT = $request->SDT;
        $nhansu->email = $request->email;
        $nhansu->dan_toc = $request->dan_toc;
        $nhansu->que_quan = $request->que_quan;
        $nhansu->CMND = $request->CMND;
        $nhansu->trinh_do = $request->trinh_do;
        $nhansu->mo_ta = $request->mo_ta;
        $nhansu->save();

        // DB::table('ns_vt')->insert([
        //     'ma_nhan_su' => $request->ma_nhan_su,
        //     'ma_vai_tro' => $request->ma_vai_tro,
        //     'tu_ngay' => $request->tu_ngay,
        //     'den_ngay' => $request->den_ngay,
        //     'mo_ta' => $request->mo_ta,
        //     'luong_co_ban' => $request->luong_co_ban],
        // );

        return redirect()->back()->with('success', 'Update thành công !');
        // return redirect()->route('nhansu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NhanSu  $nhansu
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhanSu $nhansu)
    {
        $nhansu->delete();
        return redirect()->route('nhansu.index');
    }

    public function them_vaitro_nhansu(CreateVaiTroForNhanSuRequest $request)
    {
        DB::table('ns_vt')->insert([
            'ma_vai_tro' => $request->ma_vai_tro,
            'ma_nhan_su' => $request->ma_nhan_su,
            'tu_ngay' => $request->tu_ngay,
            'den_ngay' => $request->den_ngay,
            'mo_ta' => $request->mo_ta,
            'luong_co_ban' => $request->luong_co_ban],
        );

        return redirect()->back();
        //return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function add_vai_tro_for_nhan_su(NhanSu $nhansu, Request $request)
    {
        $vaitros = VaiTro::all();
        return view ('nhansu.create_vaitro_nhansu', compact('nhansu', 'vaitros'));
    }

    public function delete_vaitro_of_nhansu(int $id)
    {
        DB::table('ns_vt')->where('id', $id)->delete();
        return redirect()->back();
        //return redirect()->back()->with('success', 'Delete thành công!');
    }
}
