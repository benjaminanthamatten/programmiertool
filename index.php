<?php
    include('db_connect.php');

    $sql = "SELECT * FROM basisdaten";
        foreach ($pdo->query($sql) as $row) {
           $title = $row['title'];
           $background = $row['background'];
        }
?>


<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="php" href="style.php">
    <title><?php echo $title ?></title>
  </head>

    <div class="edit" id="edit_basis">
        <form action="update.php" method="post">
            <p>"title" bestimmen:
            <input type="text"  name="title" value="<?php echo $title ?>"></p>
            <p>Hintergrundfarbe bestimmen:
            <input type="color" name="background" value="<?php echo $background ?>">
            </p>
            <input class="versteckt" checked="checked" type="radio" name="datenbank" value="basisdaten">
            <input type="submit" value="speichern">
        </form>
    </div>

  <body>
      <kopfbereich><p class="Placeholder">Kopfbereich</p></kopfbereich>
      <textbereich><p class="Placeholder">Textbereich</p></textbereich>
      <fussbereich><p class="Placeholder">Fusbereich</p></fussbereich>
  </body>
</html>



<!--------------------------------------------------------------------
----------------------------------------------------------------------
------------------------------- STYLE --------------------------------
----------------------------------------------------------------------
--------------------------------------------------------------------->

<style>
    p {
        font-family: sans-serif;
    }

    .edit {
        background-color: white;
        padding: 20px;
    }

    .versteckt {
        display: none;
    }

    body {
        background-color: <?php echo $background ?>;
    }
</style>
