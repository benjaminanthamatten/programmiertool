<?php
  setcookie("setbasis","set",time()+(3600*365));
  setcookie("background",$_GET['background'],time()+(3600*365));
  setcookie("anzahl",$_GET['anzahl'],time()+(3600*365));
  header('Location: startseite.php');
?>
