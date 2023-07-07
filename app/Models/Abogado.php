<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'cc', 'correo', 'direccion', 'telefono', 'comuna', 'puesto', 'mesa', 'estudios', 'titulo','experiencia', 'electoral', 'rol', 'face', 'insta','fecha_inicio','funcionario'];
}
