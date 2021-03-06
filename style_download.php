<style>
    
  body {
    background: <?php echo $_COOKIE['background'] ?>;
    margin: 0;
  }


#download_anleitung{
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

#download_inhalt{
    background-color: white;
    width: 50%;
    margin: auto;
    margin-top: 10%;
    padding: 20px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
 
}
    
.taste{
    background-color: #FF9677;
    padding: 4px 6px 4px 6px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: white;
    text-decoration: none;
    font-family: sans-serif;
}
    
.schliessen{
    background-color: red;
    float: right;
    margin: -20px -20px 0 0;
    padding: 5px 10px;
    color: white;
    font-family: sans-serif;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
    border-radius: 0 5px 0 0;
}

    
  a.box-edit {
      text-decoration: none;
      color: black;
    }

  p {
      font-family: '<?php echo $_COOKIE['text_schriftart'] ?>';
      font-weight: <?php echo $_COOKIE['text_schriftstaerke'] ?>;
      font-size: <?php echo $_COOKIE['text_schriftgroesse'] ?>px;
      color: <?php echo $_COOKIE['textfarbe'] ?>;
    }


  h1 {
      font-family: '<?php echo $_COOKIE['titel_schriftart'] ?>';
      font-weight: <?php echo $_COOKIE['titel_schriftstaerke'] ?>;
      font-size: <?php echo $_COOKIE['titel_schriftgroesse'] ?>px;
      color: <?php echo $_COOKIE['titelfarbe'] ?>;
    }

<?php
  $start_anzahl = 1;
  while($start_anzahl <= $_COOKIE["anzahl"]){
?>

  #box_<?php echo $start_anzahl ?> {
    min-height: <?php echo $_COOKIE["height_$start_anzahl"] ?>px;
    width: <?php echo $_COOKIE["width_$start_anzahl"] ?>%;
    background-color: <?php echo $_COOKIE["box_background_$start_anzahl"] ?>;
  <?php if(isset($_COOKIE["bild_background_$start_anzahl"])){ ?>
    background: url('<?php echo $_COOKIE["bild_background_$start_anzahl"] ?>');
    background-size: fixed 100% 20%;
  <?php }else{} ?>
    margin-top: <?php echo $_COOKIE["margin_top_$start_anzahl"] ?>px;
    margin-bottom: <?php echo $_COOKIE["margin_bottom_$start_anzahl"] ?>px;
    margin-left: auto;
    margin-right: auto;
    padding-top: <?php echo $_COOKIE["padding_top_$start_anzahl"] ?>px;
    padding-bottom: <?php echo $_COOKIE["padding_bottom_$start_anzahl"] ?>px;
    -webkit-border-radius: <?php echo $_COOKIE["border_radius_$start_anzahl"] ?>px;
    -moz-border-radius: <?php echo $_COOKIE["border_radius_$start_anzahl"] ?>px;
    border-radius: <?php echo $_COOKIE["border_radius_$start_anzahl"] ?>px;
  }
    
  #box_inhalt_<?php echo $start_anzahl ?> {
    width: <?php echo $_COOKIE["width_inhalt_$start_anzahl"] ?>%;
    margin: auto;
  }

  #box_<?php echo $start_anzahl ?> img{
    width: <?php echo $_COOKIE["bild_breite_$start_anzahl"] ?>%;
  }
    
  #clear {
    height: 51px;     
  }
    
  #navigation {
    background-color: <?php echo $_COOKIE["navifarbe"] ?>;
    -webkit-box-shadow: 0px 10px 28px -9px rgba(0,0,0,0.43);
    -moz-box-shadow: 0px 10px 28px -9px rgba(0,0,0,0.43);
    box-shadow: 0px 10px 28px -9px rgba(0,0,0,0.43);
    height: 51px;
    width: 100%;
    padding: 0;
    position:fixed;
    margin-bottom: 40px;
  }
    
  #navi {
    width: <?php echo $_COOKIE["navibreite"] ?>%;
    margin: auto;
    font-family: 'Roboto';
  }
    
  #navi a{
    text-decoration: none;  
    color: <?php echo $_COOKIE["navischrift"] ?>;
    padding: 16px 0 16px 0;
  }

  #navi a:hover{
    background-color: <?php echo $_COOKIE["hoverfarbe"] ?>;
    color: <?php echo $_COOKIE["hoverschrift"] ?>;
  }
 
  #navi ul{ 
    margin: 0;
    padding-top: 16px;
  }
    
  #navi li{
    display: inline;
    margin: 0 20px 0 20px;
  }


<?php
  $start_anzahl++;
  }
?>


</style>
