<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;

    protected $table = "interaccions";
    protected $primarykey = "id";
    public $timetamps = true;

    protected $fillable = [
        "inte_preferencia"
    ];

    public function perro()
    {
        return $this->belongsTo(Perro::class,"perro_id");
    }
}
