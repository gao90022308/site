<?php
$nickname = $_POST['nickname'];

setcookie("name", $nickname, time() + 3600 * 24, '/');

echo $_COOKIE["name"];
?>
<a href="/" style="font-size: 30px;" >Back</a>