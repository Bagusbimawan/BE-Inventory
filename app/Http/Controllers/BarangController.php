<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function IndexBarang()
    {
        $barang = Barang::all();

        return response()->json([
            "data" => $barang
        ]);
    }

    function StoreBarang(Request $request)
    {
        $barang = Barang::create([
            "nama_barang" => $request->nama_barang,
            "jenis_barang" => $request->jenis_barang,
            "stock" => $request->stock, 
            "harga" => $request->harga
        ]);

        return response()->json([
            "data" => $barang
        ]);
    }

    function UpdateBarang(request $request, $id_barang)
    {
        $barang = Barang::find($id_barang);
    
        $barang->update([
            "nama_barang" => $request->nama_barang,
            "jenis_barang" => $request->jenis_barang,
            "stock" => $request->stock,
            "harga" => $request->harga
        ]);

        return response()->json([
            "data"=>$barang
        ]);
    }
    
    function DestroyBarang($id_barang)
    {
        $barang = Barang::find($id_barang);
        $barang->delete();
        return response()->json([
            "data" => Barang::all()
        ]);
    }
}
