@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')


<div class="header">
    <h1>
        Les Laurentides, <br> un territoire gourmand!
        </h1>
        <p>
            Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.
        </p>

    </div>

    <div class="introAgrotourisme">
        <h2>
            Qu'est ce que <br> l'agrotourisme?
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quia, repellendus odio corrupti consectetur dolores, magnam suscipit tempore laboriosam distinctio corporis laudantium magni. Perferendis vitae unde quae id libero amet.
        </p>
    </div>


    <div class="attractionsPopulaires">

        <h2> 
            Les <span>Attractions</span> les plus <br> <span>populaires</span> de la saison
        </h2>
        <div class="Attraction">
            <img src={{asset('_assets/jpg/ImageSab/imgSab1.jpg')}} alt="Attraction1">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>

        

        <div class="Attraction">
            <img src={{asset('_assets/jpg/ImageSab/imgSab2.jpg')}} alt="Attraction2">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>


        <div class="Attraction">
            <img src={{asset('_assets/jpg/ImageSab/imgSab3.jpg')}} alt="Attraction3">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>


        <div class="Attraction">
            <img src={{asset('_assets/jpg/ImageSab/imgSab4.jpg')}} alt="Attraction4">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>
    </div>

    <div class="calendrier">
        <div class="annee">
            <ul>
                <li>
                    2022
                </li>
            </ul>
        </div>

        <div class="mois">
            <ul>
                <li>
                    <a href="">May</a>
                </li>
                <li>
                    <a href="">Juin</a>
                </li>

                <li>
                    <a href="">Juillet</a>
                </li>
            </ul>
        </div>
            
        
            <ul class="jourSemaine">
            <li>Dim</li>
            <li>Lun</li>
            <li>Mar</li>
            <li>Mer</li>
            <li>Jeu</li>
            <li>Ven</li>
            <li>Sam</li>
            </ul>
            
            <ul class="jours">
            <li class="jour">1</li>
            <li class="jour">2</li>
            <li class="jour">3</li>
            <li class="jour">4</li>
            <li class="jour">5</li>
            <li class="jour">6</li>
            <li class="jour">7</li>
            <li class="jour">8</li>
            <li class="jour">9</li>
            <li class="jour">10</li>
            <li class="jour">11</li>
            <li class="jour">12</li>
            <li class="jour">13</li>
            <li class="jour">14</li>
            <li class="jour">15</li>
            <li class="jour">16</li>
            <li class="jour">17</li>
            <li class="jour">18</li>
            <li class="jour">19</li>
            <li class="jour">20</li>
            <li class="jour">21</li>
            <li class="jour">22</li>
            <li class="jour">23</li>
            <li class="jour">24</li>
            <li class="jour">25</li>
            <li class="jour">26</li>
            <li class="jour">27</li>
            <li class="jour">28</li> 
            <li class="jour">29</li>
            <li class="jour">30</li>
            <li class="jour">31</li>
            
            </ul>

            <div class="bientot">
                <h2>
                    bientôt
                </h2>
            </div>
        
    </div>
    
    

    <div class="logement">
        <h2>
            Où se loger?
        </h2>

        <div class="option1">
            <img src={{asset('_assets/jpg/ImageSab/Logement1.jpg')}} alt="imgLogement">
            <p>
                <span>Option 1 </span><br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, accusantium!
            </p>
        </div>

        <div class="option2">
            
            <p>
                <span>Option 2 </span><br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, accusantium!
            </p>
            <img src={{asset('_assets/jpg/ImageSab/Logement2.jpg')}} alt="imgLogement">
        </div>
    </div>
</div>

@endsection