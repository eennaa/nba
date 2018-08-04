<!doctype html>
<html>
    <head>     
        <title>Teams</title>
    </head>

    <body>
        @foreach($teams as $team)
            <li><a href="{{ "/teams/" . $team->id }}"> {{ $team->name }} </a></li>
        @endforeach
    </body>
</html>
