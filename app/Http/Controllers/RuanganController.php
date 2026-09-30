<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $ruangan = Ruangan::when($search, function ($query) use ($search) {
        $query->orderByRaw("
            CASE
                WHEN jurusan LIKE ? THEN 1
                ELSE 2
            END
        ", ['%' . $search . '%']);
    })->get();
        return view('ruangan.index', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ruangan::create([
            'nama_ruangan'=>$request->nama_ruangan,
            'jurusan'=>$request->jurusan
        ]);
        return redirect()->route('ruangan.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruangan = Ruangan::find($id);
        return view('ruangan.edit')->with('ruangan', $ruangan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruangan = Ruangan::find($id)->update([
            'nama_ruangan'=>$request->nama_ruangan,
            'jurusan'=>$request->jurusan
        ]);
        return redirect()->route('ruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ruangan::findOrFail($id)->delete();
        return redirect()->route('ruangan.index');
    } 
}
