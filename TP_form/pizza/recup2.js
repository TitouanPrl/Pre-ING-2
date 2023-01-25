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
document.getElementById('nom').innerHTML=valeur[0];
document.getElementById('prenom').innerHTML=valeur[1];
document.getElementById('num').innerHTML=valeur[2];
document.getElementById('n').innerHTML=valeur[3];
document.getElementById('appel').innerHTML=valeur[4];
document.getElementById('code').innerHTML=valeur[5];
document.getElementById('ville').innerHTML=valeur[6];
