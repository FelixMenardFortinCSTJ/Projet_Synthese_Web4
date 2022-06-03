/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module App
 */
 class App {

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Gestion de la modification du sous-titre
     *//** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Mécanisme d'animation d'Animate CSS add/remove
     * @param {HMTLElement} element - target d'animation
     * @param {string} animation - type d'animation
     * @param {string} prefix - ajout du préfix pour les classes animate.css
     * @returns - Promise
     */
    static animateCSS(element, animation, prefix = 'animate__') {
        // We create a Promise and return it
        return new Promise((resolve, reject) => {
            const animationName = `${prefix}${animation}`;
            const node = element;

            node.classList.add(`${prefix}animated`, animationName);

            // When the animation ends, we clean the classes and resolve the Promise
            function handleAnimationEnd(event) {
                event.stopPropagation();
                node.classList.remove(`${prefix}animated`, animationName);
                resolve('Animation ended');
            }

            node.addEventListener('animationend', handleAnimationEnd, { once: true });
        });
    }

static menuBurger() {
    // - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Liste des éléments à manipuler
    // - - - - - - - - - - - - - - - - - - - - - - - - - - -
    var btn_burger, mainNav;
    btn_burger = document.querySelector('#btn-burger');
    mainNav = document.querySelector("nav");

    // - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Ouverture et fermeture du menu hamburger
    // - - - - - - - - - - - - - - - - - - - - - - - - - - -
    btn_burger.addEventListener("click", e => {
        btn_burger.parentNode.classList.toggle('open');
    });

    mainNav.addEventListener("focusout", e => {
        mainNav.classList.remove('open');
    });
}

static calendrier() {

    var Jours;
    Jours = document.querySelector('.jours');
   

    // - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Ouverture et fermeture du menu hamburger
    // - - - - - - - - - - - - - - - - - - - - - - - - - - -
    Jours.addEventListener("click", e => {
        Jours.parentNode.classList.toggle('open');
    });
}


/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Vérification si l'élément ciblé est visible dans la page
	 * @param {HTMLElement} element - target de l'élément à vérifier
	 * @returns 
	 */


 static isVisible(element) {
    const { top, bottom } = element.getBoundingClientRect();
    const vHeight = (window.innerHeight || document.documentElement.clientHeight);

    return ((top > 0 || bottom > 0) && top < vHeight);
}

static animationCssAll(element,animation){
    const targets = document.querySelectorAll(element);

    targets.forEach(animTarget => {
        if(this.isVisible(animTarget)){
            animTarget.classList.add('animate__animated', 'animate__' + animation);
        }
    });
}

static animeShowCard(){
    this.animationCssAll("div", "fadeIn");

    // setTimeout(() => {
    //     this.animationCssAll("p.prix", "fadeIn");
    // }, 1000);
    // setTimeout(() => {
    //     this.animationCssAll("p.date", "fadeIn");
    // }, 1400);
}

static scrollOnAnime(){
    window.addEventListener('scroll', () => {
        this.animeShowCard();
    });
}

static animeOnResize(){
    window.addEventListener("resize", e =>{
        this.animeShowCard();
    });
}

/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Initialisation du code au chargement de la page
     */
 static init() {
    window.addEventListener("load", () => {
        this.menuBurger();
        this.calendrier();
        this.scrollOnAnime();
        this.animeOnResize();
    });
}
}

App.init();