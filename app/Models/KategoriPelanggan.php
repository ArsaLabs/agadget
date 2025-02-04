<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPelanggan extends Model
{
    use HasFactory;
    protected $guarded = [];

    function pelanggan()
    {
        return $this->hasOne(Pelanggan::class);
    }
}
