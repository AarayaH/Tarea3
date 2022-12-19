<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;

    protected $table = "interaccion";
    protected $primarykey = "id";
    public $timetamps = true;

    protected $fillable = [
        "inte_preferencia"
    ];

    public function perro()
    {
        return $this->belongsTO(Perro::class,"perro_id");
    }
}