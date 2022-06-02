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
            <img src="/public/_assets/svg/placeholder.svg" alt="Attraction1">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>

        

        <div class="Attraction">
            <img src="/public/_assets/svg/placeholder.svg" alt="Attraction2">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>


        <div class="Attraction">
            <img src="/public/_assets/svg/placeholder.svg" alt="Attraction3">
            <h3>
                Nom de l'attraction
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
            </p>
        </div>


        <div class="Attraction">
            <img src="/public/_assets/svg/placeholder.svg" alt="Attraction4">
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
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li><span class="active">10</span></li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li> 
            <li>29</li>
            <li>30</li>
            <li>31</li>
            
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
            <img src="/public/_assets/svg/placeholder.svg" alt="imgLogement">
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
            <img src="/public/_assets/svg/placeholder.svg" alt="imgLogement">
        </div>
    </div>
</div>

@endsection