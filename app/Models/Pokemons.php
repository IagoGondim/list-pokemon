<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemons extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'id', 'name', 'height', 'weight', 'img'
    ];

    public function abilities()
    {
        return $this->belongsToMany(Abilities::class, 'pokemon_abilities', 'pokemon_id', 'ability_id');
    }
    public function types()
    {
        return $this->belongsToMany(Types::class, 'pokemon_types', 'pokemon_id', 'type_id');
    }


}
