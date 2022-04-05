<?php
$message = $_POST['msg'];

$handle = fopen("msgs.html", "rb");
$readf = stream_get_contents($handle);
fclose($handle);

$file = fopen("msgs.html", "w");
fwrite($file, "<p>" . $_COOKIE["name"] . ": " . $message . "</p>\n" . $readf);
fclose($file);
?>
<a style="text-align: center; font-size: 40px; text-decorations: none;" href="/" >Back</a>