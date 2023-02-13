<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonTypes extends Model
{

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'pokemon_id', 'type_id'
    ];

}
