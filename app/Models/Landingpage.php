<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Landingpage extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    protected $fillable = [
        'id_perusahaan','harga', 'kategori', 'foto', 'nama_bengkel', 'lokasi', 'nama_perusahaan', 'jam_buka', 'jam_tutup'
    ];

    static function getLandingpage(){
        $return=DB::table('landingpages')
        ->join('perusahaans','landingpages.id_perusahaan', '=', 'perusahaans.id_perusahaan'  );
        return $return;
    }

}
