<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;
    protected $fillable = ['id','codigo_abogado','fecha','lugar', 'motivo', 'created_at', 'updated_at' ];
}
