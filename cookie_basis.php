<?php
  setcookie("setbasis","set",time()+(3600*365));
  setcookie("background",$_GET['background'],time()+(3600*365));
  setcookie("anzahl",$_GET['anzahl'],time()+(3600*365));
  setcookie("titel_schriftart",$_GET['titel_schriftart'],time()+(3600*365));
  setcookie("titel_schriftstaerke",$_GET['titel_schriftstaerke'],time()+(3600*365));
  setcookie("titel_schriftgroesse",$_GET['titel_schriftgroesse'],time()+(3600*365));
  setcookie("titelfarbe",$_GET['titelfarbe'],time()+(3600*365));
  setcookie("text_schriftart",$_GET['text_schriftart'],time()+(3600*365));
  setcookie("text_schriftstaerke",$_GET['text_schriftstaerke'],time()+(3600*365));
  setcookie("text_schriftgroesse",$_GET['text_schriftgroesse'],time()+(3600*365));
  setcookie("textfarbe",$_GET['textfarbe'],time()+(3600*365));
  header('Location: live_vorschau.php');
?>
