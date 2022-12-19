<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $table = 'perros';
    protected $primarykey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "per_nombre",
        "per_urlfoto",
        "per_descripcion"
    ];

    public function interaccion()
    {
        return $this->hasMany(Interaccion::class);
    }
}


