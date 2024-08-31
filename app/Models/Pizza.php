<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    // Adicione esta propriedade para permitir a atribuição em massa
    protected $fillable = ['name', 'description', 'price'];
}
