<?php

namespace App\Http\Controllers;

use App\Models\VaiTro;
use Illuminate\Http\Request;

class VaiTroController extends Controller
{
    protected $vaitro;

    public function __construct(VaiTro $vaitro)
    {
        $this->vaitro = $vaitro;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vaitro = $this->vaitro->search($request->all());
        return view('vaitro.index', compact('vaitro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaitro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->vaitro->saveVaiTro($request);
        return redirect(route('vaitro.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VaiTro  $vaiTro
     * @return \Illuminate\Http\Response
     */
    public function show(VaiTro $vaitro)
    {
        return view('vaitro.show', compact('vaitro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VaiTro  $vaiTro
     * @return \Illuminate\Http\Response
     */
    public function edit(VaiTro $vaitro)
    {
        return view('vaitro.edit', compact('vaitro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VaiTro  $vaiTro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VaiTro $vaitro)
    {
        $vaitro->ma_to_chuc = $request->ma_to_chuc;
        $vaitro->ten_vai_tro = $request->ten_vai_tro;
        $vaitro->mo_ta = $request->mo_ta;
        $vaitro->muc_luong = $request->muc_luong;
        $vaitro->save();

        return redirect()->route('vaitro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VaiTro  $vaiTro
     * @return \Illuminate\Http\Response
     */
    public function destroy(VaiTro $vaitro)
    {
        $vaitro->delete();
        return redirect()->route('vaitro.index');
    }
}
