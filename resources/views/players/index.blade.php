@extends('layouts.main')
@section('content')

    <section class="container mt-5">
        <h1>Basketball Players Database</h1>

        <table class="table mt-2">
            <thead class="">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Team</th>
                    <th>Average Point</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            @foreach ($players as $player)
            <tbody class="">
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->last }}</td>                    
                    <td>{{ $player->team }}</td>                    
                    <td>{{ $player->average_point }}</td>                
                    <td>
                        <a href="{{ route('players.show', $player->id) }}"><button class="btn btn-primary">SHOW</button></a>
                    </td>                
                    <td>
                        <a href="{{route('players.edit', $player->id)}}"><button class="btn btn-success">EDIT</button></a>
                    </td>                
                    <td>
                        <a href=""><button class="btn btn-danger">DELETE</button></a>
                    </td>                
                </tr>
            </thead>
            @endforeach
        </table>
    </section>








@endsection