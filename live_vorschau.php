<!DOCTYPE html>
<?php

  include("style.php");
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

    <link rel="stylesheet" type="php" href="style.php">
    <title>Programmier-Tool</title>
  </head>

<?php
    include("editor.php");
?>

  <body>
      
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
          
        echo "<a class='box-edit' href='?box_einstellungen=on&box=".$start_anzahl."'>";
            echo "<div id='box_". $start_anzahl ."'>";
            echo "<div id='box_inhalt_". $start_anzahl ."'>";

                if(isset($_COOKIE["titel_$start_anzahl"])){
                    echo "<h1>".$_COOKIE["titel_$start_anzahl"]."</h1>";
                }
                if(isset($_COOKIE["fliesstext_$start_anzahl"])){
                    echo "<p>".$_COOKIE["fliesstext_$start_anzahl"]."</p>";
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
        echo "</a>";

        $start_anzahl++;
      }
    ?>

  </body>
</html>

