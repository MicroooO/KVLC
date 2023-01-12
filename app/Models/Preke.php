<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Preke extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pavadinimas',
        'Kaina',
        'Nuotrauka',
        'Aprasymas',
        'Modifikuota',
    ];
}
