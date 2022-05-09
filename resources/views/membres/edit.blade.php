<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('membres.update', $membre)}}" method="post">
    @include('membres.form')
    <div>
        <button type="submit">Modifier</button>
        <button><a href="{{route('membres.index')}}">Annuler</a> </button>
    </div>
</form>
</body>
</html>