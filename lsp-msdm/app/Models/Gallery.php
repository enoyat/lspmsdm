<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';

    #kalau kolom primary keynya bernama id, maka baris dibawah ini boleh diisi, dan boleh juga tidak buat
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    public function scopeAktif($query)
    {
        return $query->where('f_aktif',"1");
    }
    public function scopeKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }

}
