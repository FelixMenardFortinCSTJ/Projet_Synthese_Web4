<fieldset>
    @foreach($groupes as $groupe)
    <ul>
        <li>
            {{$groupe->nom}}
            @foreach($groupe->categories as $categorie)
            <ul>
                <li>
                    <label>
                        @if(in_array($categorie->id, $checkeds))
                            <input type="checkbox" name="categorie_id[]" id="categorie_id_{{$categorie->id}}" value="{{$categorie->id}}" checked="checked">
                        @else
                            <input type="checkbox" name="categorie_id[]" id="categorie_id_{{$categorie->id}}" value="{{$categorie->id}}">
                        @endif
                        {{$categorie->nom}}
                    </label>
                </li>
            </ul>
            @endforeach
        </li>
    </ul>
    @endforeach
</fieldset>