<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plazo extends Model
{
    use HasFactory;

    protected $fillable = [
        'plazo',
    ];


    // public function prestamos(): HasMany
    // {
    //     return $this->hasMany(Prestamo::class);
    // }
}
