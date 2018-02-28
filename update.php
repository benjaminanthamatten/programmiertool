<?php
    include('db_connect.php');
    echo $datenbank = $_POST['datenbank'];
    echo $background = $_POST['background'];
    echo $title = $_POST['title'];

    $statement = $pdo->prepare("UPDATE $datenbank SET title = :title_neu, background = :background_neu");
    $statement->execute(array('title_neu' => $title, 'background_neu' => $background));

    header('Location: index.php');
?>
