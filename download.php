<?php
header('Content-Type: application/download');
header('Content-Disposition: attachment; filename="deineWebseite.html"');
header("Content-Length: " . filesize("deineWebseite.html"));
$fp = fopen("deineWebseite.php", "r");
fpassthru($fp);
fclose($fp);
?>
