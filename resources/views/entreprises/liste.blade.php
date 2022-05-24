@foreach($entreprises as $entreprise)
<ul>
    <li>
        <a href="{{route('entreprises.edit', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
            
    </li>
</ul>
@endforeach