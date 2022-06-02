@extends('meslayouts.base')

@section('titre')
Portrait des régions
@endsection

@section('contenu')

<h1>Portrait de la région</h1>
<div class="BackgroundDesc">
    <p class="IntroRegion">Donec sit amet nunc hendrerit, ullamcorper mauris ut, pharetra leo. Morbi elementum cursus lacinia. Donec euismod, lacus quis dapibus ornare, turpis metus bibendum massa, accumsan dignissim felis eros non mi. Quisque suscipit pulvinar ipsum vel molestie. Donec eros purus, maximus ut metus at, finibus euismod nunc.</p>
</div>
<div class="MapLaurentides">
    <img src="../../public/_assets/svg/Laurentides.svg" alt="MapLaurentides">
    <div class="Argenteuil">
        <a href="UneMRC.html" id="Argenteuil" class="Mrc">Argenteuil</a>
        <div onclick="window.location.href='UneMRC.html'" class="Pin"></div>
    </div>
    <div class="PaysDenHaut">
        <a href="UneMRC.html" id="PaysDenHaut" class="Mrc">Pays-d'en-haut</a>
        <div onclick="window.location.href='UneMRC.html'" class="Pin"></div>
    </div>
    <div class="Laurentides">
        <a href="UneMRC.html" id="Laurentides" class="Mrc">Laurentides</a>
        <div onclick="window.location.href='UneMRC.html'" class="Pin"></div>
    </div>
    <div class="RiviereDuNord">
        <a href="UneMRC.html" id="RiviereDuNord" class="Mrc">Rivière du nord</a>
        <div onclick="window.location.href='UneMRC.html'" class="Pin"></div>
    </div>
    <div class="Mirabel">
        <a href="UneMRC.html" id="Mirabel" class="Mrc">Mirabel</a>
        <div onclick="window.location.href='UneMRC.html'" class="Pin"></div>
    </div>
    <div class="DeuxMontagnes">
        <a href="UneMRC.html" id="DeuxMontagnes" class="Mrc">Deux-Montagnes</a>
        <div onclick="window.location.href='UneMRC.html'" class="Pin"></div>
    </div>
</div>

@endsection