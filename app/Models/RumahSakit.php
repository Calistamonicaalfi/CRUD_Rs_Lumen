<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected $table = 'rumah_sakits';
    protected $primaryKey = 'id'; // default sudah 'id', boleh dihapus
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_rumah_sakit',
        'alamat_lengkap',
        'no_telpon',
        'type_rumah_sakit',
        'latitude',
        'longitude'
    ];
}