@foreach($entreprises as $entreprise)
<ul>
    <li>
        <a href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
            
    </li>
</ul>
@endforeach