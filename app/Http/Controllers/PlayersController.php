<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //assegno i dati ad una variabile
        $data = $request->all();

        //creo una nuova istanza di Player
        $new_player = new Player();

        //confronto i dati per metterli nelle giuste colonne
        $new_player->fill($data);

        //salvo i dati
        $new_player->save();

        //redirect alla pagina show
        return redirect()->route('players.show', $new_player->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $player = Player::find($id);
        
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      
        $player = Player::find($id);

        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $player = Player::find($id);

        $player->update($data);

        return redirect()->route('players.show', $player->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Assegnamo il record alla variabile Player
        $player = Player::find($id);

        //cancelliamo il record tramite il metodo delete
        $player->delete();

        //redirect alla index con il messaggio che il record è stato cancellato correttamente
        return redirect()->route('players.index')->with('deleted', $player->name . $player->last);
    }
}
