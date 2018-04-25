<?php 
$box = $_GET['box'];
    
    setcookie("box_background_$box", $_GET['box_background'],time()+(3600*365));
    setcookie("height_$box", $_GET['height'],time()+(3600*365));
    setcookie("width_$box", $_GET['width'],time()+(3600*365));
    setcookie("padding_top_$box", $_GET['padding_top'],time()+(3600*365));
    setcookie("padding_bottom_$box", $_GET['padding_bottom'],time()+(3600*365));
    setcookie("padding_left_$box", $_GET['padding_left'],time()+(3600*365));
    setcookie("padding_right_$box", $_GET['padding_right'],time()+(3600*365));
    setcookie("margin_top_$box", $_GET['margin_top'],time()+(3600*365));
    setcookie("margin_bottom_$box", $_GET['margin_bottom'],time()+(3600*365));
    setcookie("border_radius_$box", $_GET['border_radius'],time()+(3600*365));
    setcookie("titel_$box", $_GET['titel'],time()+(3600*365));
    setcookie("fliesstext_$box", $_GET['fliesstext'],time()+(3600*365));

  header('Location: live_vorschau.php');
?>