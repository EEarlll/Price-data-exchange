<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'symbol',
        'type',
        'currency',
        'exchange',
        'datetime',
        'open',
        'high',
        'low',
        'close',
        'volume',
    ];
    protected $casts = [
        'datetime' => 'json',
        'open' => 'json',
        'high' => 'json',
        'low' => 'json',
        'close' => 'json',
        'volume' => 'json'
    ];
}
