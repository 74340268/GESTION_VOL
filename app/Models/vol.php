<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vol extends Model
{
    use HasFactory;
    
    protected $fillable = ['code', 'date_depart', 'heure_depart', 'nombre_place_A', 'prix_A', 'nombre_place_B','prix_B'];
}
