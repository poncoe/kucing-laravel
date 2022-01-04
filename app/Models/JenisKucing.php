<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKucing extends Model
{
    use HasFactory;

    protected $table = 'jeniskucing';
    public $timestamps = true;

    protected $fillable = [
        'url_gambar', 'judul', 'deskripsi', 'desc_singkat'
    ];
}
