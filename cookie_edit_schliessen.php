<?php
   setcookie("edit_anzeigen",$_GET['edit_anzeigen'],time()+(3600*365));
    header('Location: live_vorschau.php');
?>