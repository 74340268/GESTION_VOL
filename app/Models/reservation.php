<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'sexe', 'place_A', 'prix_A', 'id_vol', 'place_B','prix_B'];
}
