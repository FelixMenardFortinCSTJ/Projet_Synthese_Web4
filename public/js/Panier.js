/** * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Panier
 */

 class Panier {

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Vérification du panneau
     */

    static togglePanneau(panneau, etat){
        panneau.classList.toggle('panneau-close', !etat);
        panneau.classList.toggle('panneau-open', etat);
    }

    static Panier(){

        var Fermer = document.getElementById("Fermer");

        Fermer.addEventListener("click", e=>{
            console.log("ferme le panier");
        });

/////////////////////////////////////////////////////////////////////////////

        if (panneau.classList.contains("isPanneau")) {
			panneau.addEventListener("focus", (e) => {
				this.togglePanneau(panneau, true);
				
				panneau.addEventListener('transitionend', e=>{
					console.log(e);
				}, {once:true});

				bouton.style.opacity = '0.2';
				bouton.style.cursor = 'default';
			});

			panneau.addEventListener("blur", (e) => {
				if(e.relatedTarget && e.relatedTarget.tagName === 'A') return;
				this.togglePanneau(panneau, false);
				bouton.style.removeProperty('opacity');
				bouton.style.removeProperty('cursor');
			});

			panneau.querySelector('.Panier-Open').addEventListener('click', e =>{
				panneau.blur();
			});

			panneau.querySelector('.Panier-Close').addEventListener('mousedown', e =>{
				if(panneau.classList.contains('.Panier-Open')){
					e.preventDefault(); 
					e.stopPropagation();
					panneau.blur();
				}
			});
		}
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Initialisation du code au chargement de la page
     */
	static init() {
        window.addEventListener("load", () => {
            this.btn_toggle = document.querySelector(".Panier-Open");
            this.navPan = document.querySelector('.Panier');
            
            this.Panier(this.navPan, this.btn_toggle);
        });
	}
}