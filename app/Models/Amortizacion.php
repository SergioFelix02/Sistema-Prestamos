<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Amortizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'pago',
        'fecha',
        'prestamo_id',
        'interes',
        'abono',
    ];

    public function prestamo(): BelongsTo
    {
        return $this->belongsTo(Prestamo::class);
    }

}

