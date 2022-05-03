<form action="{{route('evenements.store')}}" method="post">
    @include('evenements.form')
        <div>
            <button type="submit">Ajouter</button>
        </div>    
</form>