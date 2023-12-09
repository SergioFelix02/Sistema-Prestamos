<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cliente_id',
        'monto_id',
        'plazo_id',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
    public function monto(): BelongsTo
    {
        return $this->belongsTo(Monto::class);
    }

    public function plazo(): BelongsTo
    {
        return $this->belongsTo(Plazo::class);
    }

    public function amortizaciones(): HasMany
    {
        return $this->hasMany(Amortizacion::class);
    }
}
