<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reuniones extends Model
{
    use HasFactory;
    protected $fillable = ['id','codigo_abogado','fecha','lugar', 'aforo','status', 'created_at', 'updated_at' ];
    
}
