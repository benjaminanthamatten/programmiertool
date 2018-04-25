<style>
  body {
    background: <?php echo $_COOKIE['background'] ?>;
    margin: 0;
  }
  
  a {
      text-decoration: none;
      color: black;
    }
    
  h1 {
      font-family: '<?php echo $_COOKIE['titel_schriftart'] ?>';
      font-weight: <?php echo $_COOKIE['titel_schriftstaerke'] ?>;
      font-size: <?php echo $_COOKIE['titel_schriftgroesse'] ?>px;
      color: <?php echo $_COOKIE['titelfarbe'] ?>;
    }

  p {
      font-family: '<?php echo $_COOKIE['text_schriftart'] ?>';
      font-weight: <?php echo $_COOKIE['text_schriftstaerke'] ?>;
      font-size: <?php echo $_COOKIE['text_schriftgroesse'] ?>px;
      color: <?php echo $_COOKIE['textfarbe'] ?>;
    }   
    
<?php
  $start_anzahl = 1;
  while($start_anzahl <= $_COOKIE["anzahl"]){
?>

  #box_<?php echo $start_anzahl ?> {
    height: <?php echo $_COOKIE["height_$start_anzahl"] ?>px;
    width: <?php echo $_COOKIE["width_$start_anzahl"] ?>%;
    background-color: <?php echo $_COOKIE["box_background_$start_anzahl"] ?>;
    margin-top: <?php echo $_COOKIE["margin_top_$start_anzahl"] ?>px;
    margin-bottom: <?php echo $_COOKIE["margin_bottom_$start_anzahl"] ?>px;  
    margin-left: auto;
    margin-right: auto;
    padding-top: <?php echo $_COOKIE["padding_top_$start_anzahl"] ?>px;
    padding-bottom: <?php echo $_COOKIE["padding_bottom_$start_anzahl"] ?>px;
    padding-left: <?php echo $_COOKIE["padding_left_$start_anzahl"] ?>px;
    padding-right: <?php echo $_COOKIE["padding_right_$start_anzahl"] ?>px;    
    -webkit-border-radius: <?php echo $_COOKIE["border_radius_$start_anzahl"] ?>px;
    -moz-border-radius: <?php echo $_COOKIE["border_radius_$start_anzahl"] ?>px;
    border-radius: <?php echo $_COOKIE["border_radius_$start_anzahl"] ?>px;  
  }
    


<?php
  $start_anzahl++;
  }
?>


</style>
