<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Puestos;
use App\Models\Votos;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'cc', 'correo', 'direccion', 'comuna', 'puesto', 'mesa', 'estudios', 'titulo','experiencia', 'electoral', 'rol', 'face', 'insta'];

    public function puestos()

    {
        return $this->belongsTo(Puestos::class,'dondevota','codpuesto');
    }

    
}
