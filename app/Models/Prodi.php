<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodis';
    protected $fillable = [
        'fakultas_id',
        'nama_prodi',
        'nama_kaprodi',
        'alias_prodi',
        'foto_kaprodi'
    ];

    public function fakultas()
    {
        // A Prodi belongs to a Fakultas
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
