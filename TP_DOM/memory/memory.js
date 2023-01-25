//Q: associer la fonction déplacer à l'attribut onclick de chaque image
function retourneOnClick() {
  var cases = document.getElementsByTagName('td');
  for (var i = cases.length-1; i >= 0; i--){
    cases[i].onclick = retourner;
  }
}



var memory = document.getElementById("memory");
var nbImg = [
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte1.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte1.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte2.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte2.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte3.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte3.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte4.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte4.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte5.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte5.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte6.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte6.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte7.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte7.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte8.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte8.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte9.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte9.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte10.png',
  '/pau/homee/p/pradaltito/Documents/DevWeb/TP4/memory/img/carte10.png',
]

/*    // BUG: OUTDATED (mais permet de donner un nb aléatoire en 0 et max)
function random(max){
  console.log("Il y a "+max+" valeurs possibles");
  return Math.floor(Math.random() * max)
}
*/

//Renvoit le tableau d'images trié aléatoirement
function remplir(tab){
  let j = 0;
  let valI = '';
  let valJ = valI;
  let l = tab.length - 1;
  while (l > -1) {
    j = Math.floor(Math.random() * l);
    valI = tab[l];
    valJ = tab[j];
    tab[l] = valJ;
    tab[j] = valI;
    l--;
  }
  console.log(tab);
  console.log(memory.children[1]);
  for(let child of memory.children){
    console.log(child.value);
    for(let child2 of memory.children[child].children){   // BUG: child ne prend pas que des valeurs numériques
    /*  for(let i = 0; i < 20+1; i++){
        let imgAct = random(nbImg.length);
        console.log("Image choisie : "+imgAct);*/
        memory.children[child].children.appendChild(nbImg);
      }
    }
}

remplir(nbImg);

function retourner(e){
  /* On selectionne la case à afficher */
  var caseImg = e.target;
}



/* On charge la fonction ajouterOnClick au chargement de la page */
/* ------------------------------------------------------------  */
document.body.onload = retourneOnClick;
/* ------------------------------------------------------------  */
