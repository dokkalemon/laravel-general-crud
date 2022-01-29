@extends('layouts.main')

@section('content')

    <section class="container mt-5">
        <h1>Modifica {{$player->name}} {{$player->last}}</h1>


        <form action="{{route('players.update', $player->id)}}" method="POST" class="mt-5">
            @csrf

            @method('PUT')

            <label for="name">Inserisci il Nome</label>
            <input type="text" name="name" id="name" class="form-control d-block w-100 mb-3" value="{{$player->name}}">

            <label for="last ">Inserisci il Cognome</label>
            <input type="text" name="last" id="last" class="form-control d-block w-100 mb-3" value="{{$player->last}}">
            <label for="birth">Inserisci la Data di Nascita</label>
            <input type="text" name="birth" id="birth" class="form-control d-block w-100 mb-3" value="{{$player->birth}}">
            <label for="height">Inserisci l'Altezza</label>
            <input type="text" name="height" id="height" class="form-control d-block w-100 mb-3" value="{{$player->height}}">

            <label for="team">Inserisci il Team</label>
            <input type="text" name="team" id="team" class="form-control d-block w-100 mb-3" value="{{$player->team}}">
            <label for="team_logo">Inserisci il Logo del Team</label>
            <input type="text" name="team_logo" id="team_logo" class="form-control d-block w-100 mb-3" value="{{$player->team_logo}}">
            <label for="photo">Inserisci la Foto</label>
            <input type="text" name="photo" id="photo" class="form-control d-block w-100 mb-3" value="{{$player->photo}}">
            <label for="average_point">Inserisci la media punti</label>
            <input type="text" name="average_point" id="average_point" class="form-control d-block w-100 mb-3" value="{{$player->average_point}}">
            
            <button type="submit" class="btn btn-primary">INSERISCI IL GIOCATORE</button>





        </form>




    </section>
    
@endsection