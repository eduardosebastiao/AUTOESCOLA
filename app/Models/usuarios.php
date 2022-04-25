<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    // Usamos timestamp para evitar pedidos de migracao
    //public $timestamp = false;
    public $updated_at = false;
    public $created_at = false;
    use HasFactory;
}
