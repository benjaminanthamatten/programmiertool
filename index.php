<?php

if (isset($_COOKIE['erstaufruf'])){}else{
setcookie("background","#d8d8d8",time()+(3600*365));
setcookie("anzahl","3",time()+(3600*365));
setcookie("erstaufruf","on",time()+(3600*365));
}


header('Location: startseite.php');
?>
