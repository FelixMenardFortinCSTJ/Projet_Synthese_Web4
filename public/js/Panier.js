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
        var OpenPanier = document.getElementById("OpenPanier");
        var Panier = document.getElementById("Panier");
		

        Fermer.addEventListener("click", e=>{
            console.log("ferme le panier");
			Panier.classList.remove("Panier");
			Panier.classList.add("Panier-close");
        });

        OpenPanier.addEventListener("click", e=>{
            console.log("Ouvre le panier");
			Panier.classList.remove("Panier-close");
			Panier.classList.add("Panier");
        });
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Initialisation du code au chargement de la page
     */
	static init() {
        window.addEventListener("load", () => {
            // this.btn_toggle = document.querySelector(".Panier-Open");
            // this.navPan = document.querySelector('.Panier');
            this.Panier();
        });
	}
}
Panier.init();