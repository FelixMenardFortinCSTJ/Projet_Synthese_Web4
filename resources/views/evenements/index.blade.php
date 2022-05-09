<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>salut</h1>
    <div class="tableau">
        @foreach($evenements as $evenement)
        <div class="evenements">
            <a href="{{route('evenements.show', $evenement['id'])}}">
                <span class="image"><img src="{{$evenement->image_url}}" alt=""></span>
                <span class="nom_evenements">{{$evenement->nom_evenements}}</span>
            </a>
        </div>
        @endforeach
    </div>    
</body>
</html>