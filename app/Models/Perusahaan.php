<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    public $primaryKey = 'id_perusahaan';
    protected $fillable = [
        'nama_perusahaan',	'nama_kontak', 'email_perusahaan', 'no_telp'
    ];
}
