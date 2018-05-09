<style>
  body {
    background: <?php echo $_COOKIE['background'] ?>;
    margin: 0;
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

  #box_<?php echo $start_anzahl ?>:hover{
    -webkit-box-shadow: -1px 2px 21px -3px rgba(0,0,0,0.56);
    -moz-box-shadow: -1px 2px 21px -3px rgba(0,0,0,0.56);
    box-shadow: -1px 2px 21px -3px rgba(0,0,0,0.56);
    transition: 0.3s;
    -webkit-filter: contrast(1);
    filter: contrast(1.5);
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
