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

    function StoreBarang(Request $request)
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

}
