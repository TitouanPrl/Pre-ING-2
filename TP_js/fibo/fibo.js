let date = new Date();
let entry = prompt("saisissez un rang");

function Fibonacci(nb){
  if (nb <= 1) {
    return 1;
  }
  else {
    return (Fibonacci(nb-2) + Fibonacci(nb-1));
  }
}

let nbRes = Fibonacci(entry);


document.write("<div class='res'>");
document.write("A "+date.getHours()+"H"+date.getMinutes()+",");
document.write("<br>");
document.write("Le "+entry+"<sup>e</sup>"+" terme de la suite Fibonacci est "+"<p id=resHTML> "+nbRes+"</p>");
document.write("</div'>");
