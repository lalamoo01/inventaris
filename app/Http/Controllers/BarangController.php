<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $barang = Barang::when($search, function ($query) use ($search) {
        $query->orderByRaw("
            CASE
                WHEN nama_barang LIKE ? THEN 1
                WHEN merk LIKE ? THEN 1
                WHEN kategori LIKE ? THEN 1
                ELSE 2
            END
        ", [
            '%' . $search . '%',
            '%' . $search . '%',
            '%' . $search . '%'
        ]);
        })->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama_barang'=>$request->nama_barang,
            'merk'=>$request->merk,
            'kategori'=>$request->kategori,
            'stok'=>$request->stok
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $barang = Barang::find($id);
        return view('barang.edit')->with('barang', $barang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $barang = Barang::find($id)->update([
            'nama_barang'=>$request->nama_barang,
            'merk'=>$request->merk,
            'kategori'=>$request->kategori,
            'stok'=>$request->stok
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        \App\Models\Inventaris::where('barang_id', $id)->delete();  
        Barang::findOrFail($id)->delete();
        return redirect()->route('barang.index'); 
    }
}
