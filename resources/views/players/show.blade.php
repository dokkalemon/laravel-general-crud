@extends('layouts.main')

@section('content')
        <section class="container mt-5">

            <div class="row">
                <div class="col-6">
                    <img src="{{$player->photo}}" alt="">
                </div>
                <div class="col-6">
                    <h1>{{$player->name}} {{$player->last}}</h1>
                    <h5>Birth: {{$player->birth}}</h5>
                    <h5>Height: {{$player->height}}</h5>
                    <h5>Average Point: {{$player->average_point}}</h5>
                    <h5>Team: {{$player->team}}</h5>
                    <div class="logo mt-3">
                        <img src="{{$player->team_logo}}" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <a href="{{route('players.index')}}"><button class="btn btn-primary">BACK</button></a>
                    <a href=""><button class="btn btn-success">EDIT</button></a>
                    <a href=""><button class="btn btn-danger">DELETE</button></a>
                </div>
               
            </div>

        </section>

@endsection