<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page2</title>
</head>
<body>
  <?php
    if (isset($_POST["OUT"])){
        session_destroy();
    }
   ?>
</body>
</html>
