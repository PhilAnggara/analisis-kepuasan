<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pertanyaan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pertanyaan';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function kusioner()
    {
        return $this->belongsTo(Kusioner::class, 'id_kusioner', 'id');
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_pertanyaan', 'id');
    }
}
