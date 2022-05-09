<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Les membres</h1>
    <div class="tableau membres">
        @foreach($membres as $membre)
        <div class="membres">
            <a href="{{route('membres.show', $membre['id'])}}">
                <span class="logo"><img src="{{$membre->logo_etablissement}}" alt=""></span>
                <span class="nom_evenement">{{$membre->nom_evenement}}</span>
            </a>
        </div>
        @endforeach
    </div>
<body>