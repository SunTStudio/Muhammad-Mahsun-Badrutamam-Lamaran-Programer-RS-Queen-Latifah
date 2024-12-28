<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_obat' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
        ]);

        Obat::create($validateData);

        return redirect()->route('rs.dashboard')->with('success','Obat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat,$id)
    {
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validateData = $request->validate([
            'nama_obat' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
        ]);

        $oldObat = Obat::find($id);
        $oldObat->update($validateData);

        return redirect()->route('rs.dashboard')->with('success', 'Obat telah diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat,$id)
    {
        $obat = Obat::find($id);
        $obat->delete();
        return redirect()->route('rs.dashboard')->with('success', 'Obat telah Dihapus');
    }
}
