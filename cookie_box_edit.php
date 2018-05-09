<?php
$box = $_GET['box'];

    setcookie("box_background_$box", $_GET['box_background'],time()+(3600*365));
if(isset($_GET['bild_background'])){
    setcookie("bild_background_$box", $_GET['bild_background'],time()+(3600*365));
}else{}

if(isset($_GET['bild_box'])){
    setcookie("bild_box_$box", $_GET['bild_box'],time()+(3600*365));
}else{}

if(isset($_GET['bild_box'])){
      setcookie("bild_breite_$box", $_GET['bild_breite'],time()+(3600*365));
}else{}

if(isset($_GET['einbinden_link'])){
      setcookie("einbinden_link_$box", $_GET['einbinden_link'],time()+(3600*365));
      setcookie("einbinden_hoehe_$box", $_GET['einbinden_hoehe'],time()+(3600*365));
      setcookie("einbinden_breite_$box", $_GET['einbinden_breite'],time()+(3600*365));
}else{}

if(isset($_GET['iframe'])){
      setcookie("iframe_$box", $_GET['iframe'],time()+(3600*365));
}else{}

    setcookie("height_$box", $_GET['height'],time()+(3600*365));
    setcookie("width_$box", $_GET['width'],time()+(3600*365));
    setcookie("width_inhalt_$box", $_GET['width_inhalt'],time()+(3600*365));
    setcookie("padding_top_$box", $_GET['padding_top'],time()+(3600*365));
    setcookie("padding_bottom_$box", $_GET['padding_bottom'],time()+(3600*365));
    setcookie("margin_top_$box", $_GET['margin_top'],time()+(3600*365));
    setcookie("margin_bottom_$box", $_GET['margin_bottom'],time()+(3600*365));
    setcookie("border_radius_$box", $_GET['border_radius'],time()+(3600*365));
    setcookie("titel_$box", $_GET['titel'],time()+(3600*365));
    setcookie("fliesstext_$box", $_GET['fliesstext'],time()+(3600*365));

  header('Location: live_vorschau.php');
?>
