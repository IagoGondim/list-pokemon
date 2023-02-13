<?php

namespace App\Domain\Service;

use App\Models\Pokemons;

class PokemonService
{

    public function getPokemons(array $params)
    {
        $searchable = ['name', 'height', 'weight'];
        $pokemon = Pokemons::with('abilities', 'types');
        foreach ($searchable as $search) {
            if (isset($params[$search])) {
                $pokemon->where($search, $params[$search]);
            }
        }

        if (isset($params['ability'])) {
            $pokemon->whereHas('abilities', fn ($q) => $q->where('name', $params['ability']));
        }

        if (isset($params['type'])) {
            $pokemon->whereHas('types', fn ($q) => $q->where('name', $params['type']));
        }
        return $pokemon->paginate($params['limit'] ?? 15);
    }
}
