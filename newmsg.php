<?php
$subject = $_POST['subjw'];
$message = $_POST['messagew'];

$new_msg = "\n<div style='background-color: black; margin: 10px; padding: 10px; border-radius: 10px;' >\n  <h1>" . $subject . "</h1>\n  <p>" . $message . "</p>\n</div>";

$file = fopen("messages.html", "a+");
fwrite($file, $new_msg);
fclose($file);
?>
<h1><a style="position: relative; left: 50%; top: 50%; transform: translate(-50%, -50%);" href="/" >Back</a></h1>