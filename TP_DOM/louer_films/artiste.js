function deleteElement(x){
  console.log("Entrée dans la fct deleteElement");
  console.log("L'artiste à supp est : "+x.value);

  let list = document.getElementById("mySelect");

  //parcours la liste
  for(let child of list){
    if (child.value == x.value) {   //compare l'élmnt actuel (child) avec la valeur à supr
      list.removeChild(child);
      console.log("L'artiste n'a pas assez de parainages pour participer à l'élection, c'est CIAO");
      return; //sort de la fct alors que break sort juste de la boucle
    }
  }
  console.log("L'artiste est inconnu au bataillon");
}

function ajoutArt(){
  console.log("Entrée dans la fct ajoutArt");

  //Récupère un nom et l'ajoute à la liste
  let ajout = document.getElementById("nomArtAjout").value;
  let node = document.createElement("option");
  let textnode = document.createTextNode(ajout);
  node.appendChild(textnode);
  document.getElementById("mySelect").appendChild(node);
  console.log("Candidature acceptée");
}

function supArt(){
  console.log("Entrée dans la fct supArt");

  //Récupère le nom de l'artiste
  let art = document.getElementById("nomArtSup");

  //Supprime l'artiste
  deleteElement(art);
}

function details(){
  let winner = document.getElementById('mySelect');   //sélectionne l'élément en cours
  document.getElementById("winnerIS").setAttribute("src", "/pau/homee/p/pradaltito/Images/"+ winner.value+".jpg");    //va chercher l'image du même nom
}
