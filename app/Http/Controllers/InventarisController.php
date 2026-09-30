<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Ruangan;
use App\Models\Barang;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventaris = Inventaris::with(['barang', 'ruangan'])->get();
        return view('inventaris.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ruangan = Ruangan::all();
        $barang = Barang::all();
        return view('inventaris.create', compact('ruangan', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $listBarang = $request->barang_id;
        foreach ($listBarang as $barang_id) {
        Inventaris::create([
            'ruangan_id' => $request->ruangan_id,
            'barang_id' => $barang_id,
            'kondisi' => $request->kondisi
        ]);
        }
        return redirect()->route('inventaris.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventaris = Inventaris::find($id);
        $ruangan = Ruangan::all();
        $barang = Barang::all();

        $barangTerpilih = Inventaris::where('ruangan_id', $inventaris->ruangan_id)->pluck('barang_id')->toArray(); 

        return view('inventaris.edit', compact('inventaris', 'ruangan', 'barang', 'barangTerpilih'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inventarisLama = Inventaris::find($id);

        if ($inventarisLama) {
            Inventaris::where('ruangan_id', $inventarisLama->ruangan_id)->delete();
        }

        $listBarang = $request->barang_id; 
        
        foreach ($listBarang as $barang_id) {
            Inventaris::create([
                'ruangan_id' => $request->ruangan_id,
                'barang_id'  => $barang_id,
                'kondisi'    => $request->kondisi
            ]);
        }

        return redirect()->route('inventaris.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruangan_id = Inventaris::find($id)->ruangan_id;
        Inventaris::where('ruangan_id', $ruangan_id)->delete();
        return redirect()->route('inventaris.index');
    }
}
