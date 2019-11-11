<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $fillable = ['nama_perusahaan', 'deskripsi', 'nama_pekerjaan', 'status', 'jenis_klm', 'pendidikan', 'kriteria', 'syarat', 'email', 'nomor_tlp', 'jangka_lamaran', 'logo'];
}
