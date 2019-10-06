<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    protected $table = 'warga';
    protected $fillable = ['nama','no_kk','jenis_kelamin','alamat','tempat_tgl_lahir',
    'tanggal','status','atap_rumah','lantai','dinding','no_listrik','pekerjaan','pendapatan','Tahun'];
}
