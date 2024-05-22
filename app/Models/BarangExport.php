<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangExport extends Model
{
    use HasFactory;

    protected $table = "barangs_export";

    protected $fillable = ["nama_barang","jenis_barang","stock","harga"];

    public $timestamps = false;
}
