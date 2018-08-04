<!doctype html>
<html>
    <head>     
        <title>{{ $player->first_name }} {{ $player->last_name }}</title>
    </head>

    <body>
        <h2 class="title"> {{ $player->first_name }}  {{ $player->last_name }}<h2>
        <p> {{ $player->email }} </p>
        <p> Team: <a href="{{ "/teams/" . $player->team->id }}"> {{ $player->team->name }}  </a></p>


          
    </body>
</html>
