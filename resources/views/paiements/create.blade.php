<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route(paiements.store)}}" method="post">
    @include('paiements.form')
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>
</body>
</html>