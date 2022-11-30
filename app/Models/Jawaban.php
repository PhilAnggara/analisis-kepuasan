<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jawaban extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jawaban';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function responden()
    {
        return $this->belongsTo(Responden::class, 'id_responden', 'id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan', 'id');
    }
}
