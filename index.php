<?php
    include('db_connect.php');
    include('bereich_abfrage.php');

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
        <h1>Grundeinstellungen</h1>
        <form action="update.php" method="post">
            <p>Titel (Taskleiste) bestimmen:
            <input type="text"  name="title" value="<?php echo $title ?>"></p>
            <p>Hintergrundfarbe bestimmen:
            <input type="color" name="background" value="<?php echo $background ?>">
            </p>
            <input class="versteckt" checked="checked" type="radio" name="datenbank" value="basisdaten">
            <input type="submit" value="speichern">
        </form>
    </div>

    <div class="edit" id="edit_erweitert">
        <h1>Erweiterte Einstellungen</h1>
        <form action="bearbeiten_session.php" method="post">
            <p>Welchen Bereich möchten Sie bearbeiten:
            <option></option>
            <input class="versteckt" checked="checked" type="radio" name="datenbank" value="basisdaten">
            <input type="submit" value="speichern">
        </form>
    </div>
    <div class="clear" id="clear">
    </div>

  <body>
      <a href="anzeigen_update.php?anzeigen=yes&box=box-1">+ Hinzufügen</a>
      <a href="anzeigen_update.php?anzeigen=none&box=box-1">- Entfernen</a>

      <?php
        if($box_1_anzeigen == 'yes'){
          echo "<div id='box-1'><h1>". $box_1_title . "</h1><p>" . $box_1_text . "</p></div>";
          echo "<a href='anzeigen_update.php?anzeigen=yes&box=box-2'>+ Hinzufügen</a>
                <a href='anzeigen_update.php?anzeigen=none&box=box-2'>- Entfernen</a>";
        }

        if($box_2_anzeigen == 'yes'){
          echo "<div id='box-1'><h1>". $box_2_title . "</h1><p>" . $box_2_text . "</p></div>";
          echo "<a href='anzeigen_update.php?anzeigen=yes&box=box-3'>+ Hinzufügen</a>
                <a href='anzeigen_update.php?anzeigen=none&box=box-3'>- Entfernen</a>";
        }

        if($box_3_anzeigen == 'yes'){
          echo "<div id='box-1'><h1>". $box_3_title . "</h1><p>" . $box_3_text . "</p></div>";
          echo "<a href='anzeigen_update.php?anzeigen=yes&box=box-4'>+ Hinzufügen</a>
                <a href='anzeigen_update.php?anzeigen=none&box=box-4'>- Entfernen</a>";
        }
      ?>
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

    input {
      padding: 3px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 2px solid #eeeeee;
      background-color: white;
      color: #888888;
    }

    .clear {
      clear: both;
    }

    .edit {
        float: left;
        font-family: sans-serif;
        color: #888888;
        width: 400px;
        margin: auto;
        background-color: white;
        padding: 20px;
        margin: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 2px solid #eeeeee;
    }

    .versteckt {
        display: none;
    }

    body {
        background-color: <?php echo $background ?>;
    }


/********************* box-1 ***********************/
  #box-1 {
    background: <?php echo $box_1_background ?>;
    width: <?php echo $box_1_width ?>;
    height: <?php echo $box_1_height ?>;
    margin-top: <?php echo $box_1_margin_top ?>;
    margin-bottom: <?php echo $box_1_marign_bottom ?>;
    margin-left: <?php echo $box_1_margin_left ?>;
    margin-right: <?php echo $box_1_margin_right ?>;
    padding-top: <?php echo $box_1_padding_top ?>;
    padding-bottom: <?php echo $box_1_padding_bottom ?>;
    padding-left: <?php echo $box_1_padding_left ?>;
    padding-right: <?php echo $box_1_padding_right ?>;
  }

  /********************* box-2 ***********************/
    #box-2 {
      background: <?php echo $box_2_background ?>;
      width: <?php echo $box_2_width ?>;
      height: <?php echo $box_2_height ?>;
      margin-top: <?php echo $box_2_margin_top ?>;
      margin-bottom: <?php echo $box_2_marign_bottom ?>;
      margin-left: <?php echo $box_2_margin_left ?>;
      margin-right: <?php echo $box_2_margin_right ?>;
      padding-top: <?php echo $box_2_padding_top ?>;
      padding-bottom: <?php echo $box_2_padding_bottom ?>;
      padding-left: <?php echo $box_2_padding_left ?>;
      padding-right: <?php echo $box_2_padding_right ?>;
    }

    /********************* box-3 ***********************/
      #box-2 {
        background: <?php echo $box_3_background ?>;
        width: <?php echo $box_3_width ?>;
        height: <?php echo $box_2_height ?>;
        margin-top: <?php echo $box_3_margin_top ?>;
        margin-bottom: <?php echo $box_3_marign_bottom ?>;
        margin-left: <?php echo $box_3_margin_left ?>;
        margin-right: <?php echo $box_3_margin_right ?>;
        padding-top: <?php echo $box_3_padding_top ?>;
        padding-bottom: <?php echo $box_3_padding_bottom ?>;
        padding-left: <?php echo $box_3_padding_left ?>;
        padding-right: <?php echo $box_3_padding_right ?>;
      }

</style>
