<style>
  body {
    background: <?php echo $_COOKIE['background'] ?>
  }

<?php
  $start_anzahl = 1;
  while($start_anzahl <= $_COOKIE["anzahl"]){
?>

  #box_<?php echo $start_anzahl ?> {
    height: 100px;
    width: 100%;
    background-color: white;
    margin: 5px;
  }

<?php
  $start_anzahl++;
  }
?>


</style>
