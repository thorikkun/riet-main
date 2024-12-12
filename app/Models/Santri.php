<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'santri';

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['id_user', 'nama_kamar', 'kelas'];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Boot method untuk menangani event model
    protected static function boot()
    {
        parent::boot();

        // Event sebelum data Santri dihapus
        static::deleting(function ($santri) {
            // Tambahkan logika untuk menghapus data terkait, jika diperlukan
            // Contoh: Hapus data dari tabel lain yang berhubungan dengan Santri
            // Contoh: $santri->relatedModel()->delete();
        });
    }
}
