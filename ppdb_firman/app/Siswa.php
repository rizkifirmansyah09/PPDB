<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $guarded = [];

    public function getGenderDefinitionAttribute()
    {
        return $this->jk === 0 ? 'Laki - laki' : 'Perempuan';
    }
}
