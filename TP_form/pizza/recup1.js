nom = new Array();
valeur = new Array();

/* On enlève le ? */
url = window.location.search.slice(1,window.location.search.length);

/* récupérer les différents paramètres séparés par un & */
listParam = url.split("&");
for(i=0;i<listParam.length;i++){
    laListe = listParam[i].split("=");
    nom[i] = laListe[0];
    valeur[i] = laListe[1];
}

/*On attribue à chaque id la valeur rentrée*/
document.getElementById('pate').innerHTML=valeur[0];
document.getElementById('sauce').innerHTML=valeur[1];
document.getElementById('ing1').innerHTML=valeur[2];
document.getElementById('ing2').innerHTML=valeur[3];
document.getElementById('ing3').innerHTML=valeur[4];
document.getElementById('fidelite').innerHTML=valeur[5];
