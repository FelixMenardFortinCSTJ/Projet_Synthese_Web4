/** * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Panier
 */

 class Panier {

	/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Gestion des classes d'ouverture et de fermeture du 
	 * panneau
     */


	// static togglePanneau(panneau, etat){
	// 	panneau.classList.toggle('PanierClose', !etat);
    //     panneau.classList.toggle('PanierOpen', etat);
	// }


    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Vérification du panneau
     */

        static verifPanneau(){
            var Close = document.getElementById("Fermer");

            Close.addEventListener("click", e=>{
                console.log("ferme le panier");
            });
        }



	// static verifPanneau(panneau, bouton) {
	// 	if (panneau.classList.contains("isPanneau")) {
	// 		panneau.addEventListener("focus", (e) => {
	// 			this.togglePanneau(panneau, true);
				
	// 			panneau.addEventListener('transitionend', e=>{
	// 				console.log(e);
	// 			}, {once:true});

	// 			bouton.style.opacity = '0.2';
	// 			bouton.style.cursor = 'default';
	// 		});

	// 		panneau.addEventListener("blur", (e) => {
	// 			if(e.relatedTarget && e.relatedTarget.tagName === 'A') return;
	// 			this.togglePanneau(panneau, false);
	// 			bouton.style.removeProperty('opacity');
	// 			bouton.style.removeProperty('cursor');
	// 		});

	// 		panneau.querySelector('i.PanierClose').addEventListener('click', e =>{
	// 			panneau.blur();
	// 		});

	// 		panneau.querySelector('i.Panier').addEventListener('mousedown', e =>{
	// 			if(panneau.classList.contains('panneau-open')){
	// 				e.preventDefault(); 
	// 				e.stopPropagation();
	// 				panneau.blur();
	// 			}
	// 		});
	// 	}
	// }



    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
   	 * Initialisation du code au chargement de la page
     */
	static init() {
		// window.addEventListener("load", () => {
		// 	this.btn_toggle = document.querySelector(".PanierIcone");
		// 	this.navPan = document.querySelector('.Panier');
			
			this.verifPanneau();
		// });
	}
}