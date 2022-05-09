<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Supprimer l'élément {{$membre->nom}} ?</h1>
<form action="{{route('membres.destroy', $membre)}}" method="post">
    @csrf
    <div>
        <button data-icon="done" type="submit" name="delete">Supprimer l'élément</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('membres.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('membres.show', $membre)}}">Retour à l'élément</a>
    <a data-icon="edit" href="{{route('membres.edit', $membre)}}">Modifier l'élément</a>
</div>
</body>
</html>
