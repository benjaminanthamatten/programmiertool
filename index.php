<?php

if (isset($_COOKIE['erstaufruf'])){}else{
for ($i = 1;$i < 6;$i++) {
setcookie("edit_anzeigen","ja",time()+(3600*365));    
    
setcookie("background","#d8d8d8",time()+(3600*365));
setcookie("anzahl","3",time()+(3600*365));
setcookie("titel_schriftart","Roboto",time()+(3600*365));
setcookie("titel_schriftstaerke","500",time()+(3600*365));
setcookie("titel_schriftgroesse","24",time()+(3600*365));
setcookie("titelfarbe","#000000",time()+(3600*365));
setcookie("text_schriftart","Roboto",time()+(3600*365));
setcookie("text_schriftstaerke","300",time()+(3600*365));
setcookie("text_schriftgroesse","15",time()+(3600*365));
setcookie("textfarbe","#000000",time()+(3600*365));   
setcookie("erstaufruf","on",time()+(3600*365));
setcookie("navifarbe","#ffffff",time()+(3600*365));
setcookie("navischrift","#000000",time()+(3600*365));
setcookie("navibreite","60",time()+(3600*365));
setcookie("hoverfarbe","#FF9677",time()+(3600*365));
setcookie("hoverschrift","#ffffff",time()+(3600*365));
    



    setcookie("box_background_$i","#ffffff",time()+(3600*365));
    setcookie("height_$i","200",time()+(3600*365));
    setcookie("width_$i","70",time()+(3600*365));
    setcookie("padding_top_$i","50",time()+(3600*365));
    setcookie("padding_bottom_$i","20",time()+(3600*365));
    setcookie("width_inhalt_$i","80",time()+(3600*365));
    setcookie("margin_top_$i","0",time()+(3600*365));
    setcookie("margin_bottom_$i","0",time()+(3600*365));    
    setcookie("border_radius_$i","0",time()+(3600*365));    
    setcookie("titel_$i","Titel $i",time()+(3600*365)); 
    setcookie("fliesstext_$i","Platzhalter $i: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.",time()+(3600*365)); 

}
}


header('Location: live_vorschau.php');
?>
