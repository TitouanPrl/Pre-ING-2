let nom = new Array();
let valeur = new Array();

/* On enlève le ? */
let url = window.location.search.slice(1,window.location.search.length);

/* récupérer les différents paramètres séparés par un & */
listParam = url.split("&");
for(let i=0;i<listParam.length;i++){
    laListe = listParam[i].split("=");
    nom[i] = laListe[0];
    valeur[i] = laListe[1];
    if (valeur[i] == "oui") {
      document.getElementById(i-1).innerHTML=valeur[i];
    }
}
