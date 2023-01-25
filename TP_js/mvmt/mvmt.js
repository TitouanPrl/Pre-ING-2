function changeImg(x){
  console.log(x.src);
  if (x.src=="file:///pau/homee/p/pradaltito/Images/cytech_logo.png") {
    x.src="/pau/homee/p/pradaltito/Images/boeuf.jpg";
    console.log("if1");
  }
  else {
    x.src="/pau/homee/p/pradaltito/Images/cytech_logo.png";
  }
}

function normalImg(x){
  console.log(x.src);
  if (x.src=="file:///pau/homee/p/pradaltito/Images/boeuf.jpg") {
    x.src="/pau/homee/p/pradaltito/Images/cytech_logo.png";
    console.log("if2");
  }
  else {
    x.src="/pau/homee/p/pradaltito/Images/boeuf.jpg";
  }
}

function popUp(){
  var img = document.querySelector("#MyImg");
  var src = img.src;
  var width = img.width;
  var height = img.height;
  console.log("popUpOK");
  alert("Source : " + src + ", Height : " + height + ", width : " + width);
}

function changement(){
  console.log("LE CHANGEMENT");
  var nb = Math.floor((Math.random()*10)%3);    //génère un nb aléatoire entre 0, 1 et 2
  console.log(nb)
  var img = document.getElementById("imgRand");
  switch (nb) {
    case 0:
      img.src = "/pau/homee/p/pradaltito/Images/bk.jpg";

      break;
    case 1:
      img.src = "/pau/homee/p/pradaltito/Images/boeuf.jpg";
      break;
    case 2:
      img.src = "/pau/homee/p/pradaltito/Images/voitu.jpg";
      break;
    default:
      img.src = "/pau/homee/p/pradaltito/Images/SahQuelPlaisir.jpg";
  }
}
