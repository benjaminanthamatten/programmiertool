<!DOCTYPE html>
<?php

  include("style_download.php");
?>


<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

    <title>Programmier-Tool</title>
  </head>


  <body>
      
<?php 
    if(isset($_GET['download_anleitung'])){
?>
      
        <div id="download_anleitung">
            <div id="download_inhalt">
                <a href="vorschau_download.php"><div class="schliessen">x</div></a>
                <h1>Um die Webseite herunterzuladen schliessen Sie dieses Fenster und drücken Sie anschliessend...</h1><br>
                <p>... die Tasten <span class="taste">Ctrl</span> + <span class="taste">S</span> bei einem Windows oder Linux-Computer</p>
                <p>... oder die Tasten <span class="taste">cmd ⌘</span> + <span class="taste">S</span> auf einem MAC-Computer (OS X)</p>
                <br><a class="taste" href="index.php">Abbrechen / Zurück zum Editor</a>
            </div>
        </div>
<?php
    }
?>
      
    <?php 
      $start = 1;
        echo "<div id='navigation'>";
        echo "<div id='navi'>";
        echo "<ul>";
      
        while($start <= $_COOKIE["anzahl"]){
          if(isset($_COOKIE["titel_$start"])){
              echo "<a href='#box_".$start."'><li>".$_COOKIE["titel_$start"]."</li></a>";
          }
        $start++;
        }
      
        echo "</ul>";
        echo "</div>";
        echo "</div>";
    ?>
      
    <div id="clear"></div>
      
    <?php
      $start_anzahl = 1;
      while($start_anzahl <= $_COOKIE["anzahl"]){
          
            echo "<div id='box_". $start_anzahl ."'>";
            echo "<div id='box_inhalt_". $start_anzahl ."'>";

                if(isset($_COOKIE["titel_$start_anzahl"])){
                    echo "<h1>".$_COOKIE["titel_$start_anzahl"]."</h1>";
                }
                if(isset($_COOKIE["voreinstellungen_$start_anzahl"])){
					if(isset($_COOKIE["fliesstext_$start_anzahl"])){
                    echo "<p>".$_COOKIE["fliesstext_$start_anzahl"]."</p>";
					}
                }else{
                    echo "<p>Keine Voreinstellungen</p>";
                }
                if(isset($_COOKIE["bild_box_$start_anzahl"])){
                    echo "<img src='".$_COOKIE["bild_box_$start_anzahl"]."' />";
                }
                if(isset($_COOKIE["iframe_$start_anzahl"])){
                    echo $_COOKIE["iframe_$start_anzahl"];
                }
                if(isset($_COOKIE["einbinden_link_$start_anzahl"])){
                    $link = $_COOKIE["einbinden_link_$start_anzahl"];
                    $hoehe = $_COOKIE["einbinden_hoehe_$start_anzahl"];
                    $breite = $_COOKIE["einbinden_breite_$start_anzahl"];
                    echo "<iframe src='". $link ."' width='". $breite ."%' height='". $hoehe ."' frameborder='0' style='border:0' allowfullscreen></iframe>";
                }
            echo "</div>";
            echo "</div>";

        $start_anzahl++;
      }
    ?>

  </body>
</html>

