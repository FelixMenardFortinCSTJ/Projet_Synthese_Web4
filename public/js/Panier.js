/** * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Panier
 */

 class Panier {

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Vérification du panneau
     */

        static Panier(){

            var Fermer = document.getElementById("Fermer");

            Fermer.addEventListener("click", e=>{
                console.log("ferme le panier");
            });
        }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Initialisation du code au chargement de la page
     */
	static init() {
			this.Panier();
	}
}