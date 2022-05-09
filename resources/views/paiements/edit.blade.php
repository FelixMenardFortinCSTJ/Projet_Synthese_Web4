<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('paiements.update', $membre)}}" method="post">
    @include('paiements.form')
    <div>
        <button type="submit">Modifier</button>
        <button><a href="{{route('paiements.index')}}">Annuler</a> </button>
    </div>
</form>
</body>
</html>