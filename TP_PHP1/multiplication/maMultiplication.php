<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="maMultiplication.css">
    <title>Table de multiplication</title>
  </head>
  <body>
    <?php
      $tableMult = rand(1, 20);

      echo "Table de <span id='table'>$tableMult</span>";
      for ($i=1; $i < 11; $i++) {
        echo "<div>";
        echo "$tableMult x $i = "."<input type='text' id='$i' name='$i'> <span id='s$i'></span>";
        echo "</div>";
      }
     ?>

<script type="text/javascript">
  function corriger(){
    let res = 0;
    for (var i=1; i<11; i++) {
      if ((document.getElementById(i).value) == (document.getElementById('table').textContent*i)) {
        res++;
        document.getElementById('s'+i).innerHTML = "Vrai";
        document.getElementById('s'+i).style.color = "green";
      }
      else if ((document.getElementById(i).value) == "") {    //OU document.getElementById(i).textLength) == 0
        document.getElementById('s'+i).innerHTML = "Regardez le il a pas répondu";
        document.getElementById('s'+i).style.color = "black";
      }
      else {
        res--;
        document.getElementById('s'+i).innerHTML = "Faux";
        document.getElementById('s'+i).style.color = "red";
      }
  }
  let txt = document.getElementById('res');
  txt.innerHTML = "Vous avez obtenu une note de : "+res;
  if (res == 10) {
    txt.innerHTML = txt.innerHTML+" That's my boy";
  }
}
</script>

     <input type="button" id="button" name="button" value="Corriger" onclick="corriger()"/>
     <div id="res"></div>

  </body>
</html>
