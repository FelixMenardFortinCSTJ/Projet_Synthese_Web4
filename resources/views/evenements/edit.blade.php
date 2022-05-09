<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('evenements.update', $evenement)}}" method="post">
        @include('evenements.form')
        <div>
            <button type="submit"> Modifier l'événement</button>
        </div>
    </form>
</body>
</html>