<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    // Usamos timestamp para evitar pedidos de migracao
    public $timestamp = false;
    use HasFactory;
}
