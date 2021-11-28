<?php

namespace App\Http\Controllers;

use App\Models\NhanSu;
use Illuminate\Http\Request;

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
        return view('nhansu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return view('nhansu.edit', compact('nhansu'));
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

        return redirect()->route('nhansu.index');
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
}
