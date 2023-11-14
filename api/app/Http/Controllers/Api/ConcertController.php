<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;


class ConcertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los artistas con sus conciertos
        $artistsWithConcerts = Artist::with('concerts')->get();

        // Obtener todos los conciertos de un artista específico (por ejemplo, el primer artista)
        $artist = Artist::find(1);
        $concertsOfArtist = $artist->concerts;

        // Hacer algo con los datos obtenidos, como pasarlos a una vista
        return view('concerts.index', compact('artistsWithConcerts', 'concertsOfArtist'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
