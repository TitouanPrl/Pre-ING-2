var joueur=0;
var taille = 3;
var tab = [
  [-1, -1, -1],
  [-1, -1, -1],
  [-1, -1, -1]
]
var res = -1;

function quiJoue(){
  joueur = (joueur +1) % 2;
  console.log("Le joueur actuel est : " +joueur);
}

function verifLigne(){
  for (var i = 0; i < taille; i++) {
    if (tab[i][0] == tab[i][1] == tab[i][2] == joueur) {    //Conditions à changer avec des && (A == B) && (B == C) etc... Sinon renvoit le mauvais résultat
      res = joueur;
    }
  }
  console.log("res ligne :"+res);
  return res;
}

function verifCol(){
  for (var i = 0; i < taille; i++) {
    if (tab[0][i] == tab[1][i] == tab[2][i] == joueur) {
      res = joueur;
    }
  }
  console.log("res colonne :"+res);
  return res;
}

function verifDiag1(){
  if (tab[0][0] == tab[1][1] == tab[2][2] == joueur) {
    res = joueur;
  }
  console.log("res diag1 :"+res);
  return res;
}

function verifDiag2(){
  if (tab[0][2] == tab[1][1] == tab[2][0] == joueur) {
    res = joueur;
  }
  console.log("res diag2 :"+res);
  return res;
}

function joue(id, x, y){
  console.log(id);
  console.log("Joueurs en cours dans la fct joue :"+ joueur);
  if (joueur == 0) {
    console.log("Boucle 0");
    document.getElementById(id).src = "/pau/homee/p/pradaltito/Images/fond1.png"
    tab[x][y] = joueur;
  }
  else if (joueur == 1) {
    document.getElementById(id).src = "/pau/homee/p/pradaltito/Images/fond2.png"
    tab[x][y] = joueur;
  }
  else {
    console.log('Mauvais choix');
  }
  res = Math.max(verifLigne(), verifCol(), verifDiag1(), verifDiag2());
  console.log("res :"+res);

  if (res == 0) {
    alert("Le premier joueur a gagné !");
  }
  else if (res == 1) {
    alert("Le deuxième joueur a gagné !");
  }
  else {
    quiJoue();
  }
}
