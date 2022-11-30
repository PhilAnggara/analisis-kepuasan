<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kusioner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kusioner';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class, 'id_kusioner', 'id');
    }

    public function responden()
    {
        return $this->hasMany(Responden::class, 'id_kusioner', 'id');
    }
}
