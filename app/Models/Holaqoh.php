<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holaqoh extends Model
{
    use HasFactory;

    protected $table = 'holaqohs'; // Nama tabel
    protected $fillable = [
        'id_user', 'id_santri', 'jenis', 'catatan', 'status'
    ]; // Kolom yang dapat diisi
}

