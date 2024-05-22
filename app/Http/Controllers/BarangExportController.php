<?php

namespace App\Http\Controllers;

use App\Models\BarangExport;
use Illuminate\Http\Request;

class BarangExportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function IndexBarang()
    {
        $barang = BarangExport::all();

        return response()->json([
            "data" => $barang
        ]);
    }

    function StoreBarang(request $request)
    {
        $barang = BarangExport::create([
            "nama_barang" => $request->nama_barang,
            "jenis_barang" => $request->jenis_barang,
            "stock" => $request->stock, 
            "harga" => $request->harga
        ]);

        return response()->json([
            "data" => $barang
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangExport $barangExport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangExport $barangExport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangExport $barangExport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangExport $barangExport)
    {
        //
    }
}
