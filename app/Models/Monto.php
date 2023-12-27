<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Monto extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
    ];

    // public function prestamos(): HasMany
    // {
    //     return $this->hasMany(Prestamo::class);
    // }
}
