<?php

namespace App\Http\Controllers;

use App\Domain\Service\PokemonService;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function __construct(
        protected PokemonService $pokemonService
    ) {
    }

    public function __invoke(Request $request)
    {
        try {
            $params = $request->all();

            $pokemons = $this->pokemonService->getPokemons($params);
            return response()->json($pokemons);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), $th->getCode());
        }
    }
}
