<select name="categorie_id">
    @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}" selected>
            {{ $categorie->nom }}
        </option>
    @endforeach
</select>
