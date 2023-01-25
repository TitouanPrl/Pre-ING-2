/* -------------------------------------------------  */
//Q: associer la fonction déplacer à l'attribut onclick de chaque image
function ajouterOnClick() {
  var images = document.getElementsByTagName('img');
  for (var i = images.length-1; i >= 0; i--){
    images[i].onclick = deplacer;
  }
}
/* -------------------------------------------------  */


/* -------------------------------------------------  */
/* mes noms de films (à afficher dans le bloc choix   */
var noms = [
  'Jurassic Parc',
  'Star Wars',
  'Hobbit',
  'Cite Or',
  'Le dernier Empereur',
  'Apocalypse now'
]
/* -------------------------------------------------  */


/* -------------------------------------------------  */
/* Mes variables */
/* récupération des élements de la page */
/* le bloc magasin; le bloc choix, le bloc panier ... */
var magasin = document.getElementById("magasin");
var choix = document.getElementById("choix");
var choisis = 0;

/* -------------------------------------------------  */

function deplacer(e) {
  /* On selection l'image à deplacer */
  var elementImg = e.target;
  /*  Si l'image est à gauche alors je la met à droite*/
  if(elementImg.parentNode == magasin){
    let ajout = elementImg.alt;
    let node = document.createElement("p");
    let textnode = document.createTextNode(ajout);
    node.appendChild(textnode);
    document.getElementById("choix").appendChild(node);
    choix.appendChild(elementImg);
    choisis++;
    document.getElementById(elementImg.alt).value="oui";
  }
  /* Si l'image est à droite alors je la met à gauche*/
  else{
	  magasin.appendChild(elementImg);
    choisis--;
    for(let child of choix.children){
      if ((child.tagName == "P") && (child.textContent == elementImg.alt)){
        choix.removeChild(child)
      }
    }
    document.getElementById(elementImg.alt).value="non";
  }
  document.getElementById("prix").textContent = 2.50*choisis+"€";
}

/* ------------------------------------------------------------  */
/* On charge la fonction ajouterOnClick au chargement de la page */
/* ------------------------------------------------------------  */
document.body.onload = ajouterOnClick;
/* ------------------------------------------------------------  */
