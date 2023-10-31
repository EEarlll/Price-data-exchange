<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fiat extends Model
{
    use HasFactory;
    protected $fillable = [
        'symbol',
        'type',
        'currency_base',
        'currency_quote',
        'datetime',
        'open',
        'high',
        'low',
        'close',
    ];
    protected $casts = [
        'datetime' => 'json',
        'open' => 'json',
        'high' => 'json',
        'low' => 'json',
        'close' => 'json',
    ];
}
