<?php
  include('db_connect.php');
  echo $box_anzeigen = $_GET['anzeigen'];
  echo $box = $_GET['box'];
  $statement = $pdo->prepare("UPDATE bereiche SET anzeigen = :anzeigen_neu WHERE box = :box");
  $statement->execute(array('box' => $box,'anzeigen_neu' => $box_anzeigen));

  header('Location: index.php');
?>
