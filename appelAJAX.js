function appelAJAX(methode, www, parametre){

// Creation de l'instance XHR 
	// - 0 : L'objet XHR a été créé, mais pas encore initialisé (la méthode open n'a pas encore été appelée)
	var xhr = new XMLHttpRequest();
	// URL de destinattion
	var url = www;
	if (parametre !== null) {
		// Parametre envoyer (ex: url.php?var=1&var=2)
		var params = parametre;
	}
	// Objet initialisé
	xhr.open(methode, url, true);

	//Si vous utilisez la méthode POST, vous devez absolument changer le type MIME de la requête avec la méthode setRequestHeader , sinon le serveur ignorera la requête :
	if (methode == "POST") {
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	}	

	xhr.onreadystatechange = function() {// Appel de la fonction au changement d'état de l'appel Ajax
		/*
		Il faut savoir que quand on envoie une requête HTTP via XMLHttpRequest, celle-ci passe par plusieurs états différents :

		0 : L'objet XHR a été créé, mais pas encore initialisé (la méthode open n'a pas encore été appelée)
		1 : L'objet XHR a été créé, mais pas encore envoyé (avec la méthode send )
		2 : La méthode send vient d'être appelée
		3 : Le serveur traite les informations et a commencé à renvoyer des données
		4 : Le serveur a fini son travail, et toutes les données sont réceptionnées
		*/
	    if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
				if (xhr.responseText.length > 0) {
					return xhr.responseText;
				}
			} else if (xhr.readyState < 4) {
				//console.log('erreur AJAX')
			}
	}
	// Envoi des parametre 
	if (methode == "POST") {
		xhr.send(params);
	} else {
		xhr.send(null);
	}
};



function loader(etat){
	if (etat == "chargement") {
		document.getElementById("loader").style.display = "inline-block";
	} else if(etat == "terminer") {
		document.getElementById("loader").style.display = "none";
	} else {
		console.log('ERROR: Erreur lors du chargement. cf/function "Loader()"');
	}
}