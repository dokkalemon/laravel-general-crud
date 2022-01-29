@extends('layouts.main')

@section('content')
    <section class="home-main container">
       <div class="img">
           <img src="https://loghi-famosi.com/wp-content/uploads/2021/01/National-Basketball-Association-Logo.png" alt="">
       </div>
       <div class="buttons">
           <a href="{{route('players.index') }}"><button class="btn btn-primary">VAI AL DATABASE</button></a>
           <a href="{{route('players.create')}}"><button class="btn btn-secondary">INSERISCI UN GIOCATORE</button></a>
       </div>
    </section>
@endsection