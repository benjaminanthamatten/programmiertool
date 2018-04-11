<!DOCTYPE html>
<?php
  include("style.php");
?>

<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="php" href="style.php">
    <title><?php echo $title ?></title>
  </head>

  <div id="edit">
    <form action="cookie_basis.php" method="get">
        <p>Hintergrundfarbe:</p>
        <input type="color" name="background" value="<?php echo $_COOKIE["background"] ?>">
        <p>Anzahl Bereiche:</p>
        <input type="number" name="anzahl" value="<?php echo $_COOKIE["anzahl"] ?>">
        <input type="submit" value="speichern">
    </form>
  </div>

  <body>
    <?php
      $start_anzahl = 1;
      while($start_anzahl <= $_COOKIE["anzahl"]){
        echo "<div id='box_". $start_anzahl ."'><h1>Bereich ".$start_anzahl."</h1></div>";
        $start_anzahl++;
      }
    ?>

  </body>
</html>
