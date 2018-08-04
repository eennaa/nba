<!doctype html>
<html>
    <head>     
        <title>{{ $team->name }}</title>
    </head>

    <body>
        <h2 class="title"> {{ $team->name }} <h2>
        <p> {{ $team->email }} </p>
        <p> {{ $team->address }} </p>
        <p> {{ $team->city }} </p>
        <p> Players: 
            @foreach($team->players as $player)
                <ul> <a href="{{ "/players/" . $player->id }}"> {{ $player->first_name }} {{ $player->last_name }}</ul> </a>
            @endforeach
        </p>


            
    </body>
</html>
