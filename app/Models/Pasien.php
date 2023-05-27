<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $primary_key = 'no_rekam_medis';
    protected $fillable = [
        'no_rekam_medis',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'golongan_darah',
        'no_telp',
        'email',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'alamat',
        'foto_ktp',
        'nama_lengkap_wali',
        'jenis_kelamin_wali',
        'pekerjaan_wali',
        'hubungan_keluarga',
        'no_telp_wali',
        'email_wali',
        'provinsi_wali',
        'kabupaten_wali',
        'kecamatan_wali',
        'alamat_wali',
        'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}