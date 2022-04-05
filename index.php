<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  
    <title>Chat</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <h1>Это тест чата!</h1>
    <p>Для обновления сообщений надо обновить страницу!</p>
    <p>Разница с форумом то что сообщения появляются сверху.</p>
    
    <?php 
      if($_COOKIE["name"] != "") {
    ?>
    <h1>Общий чат!</h1>
    <form action="unset.php" >
      <input class="submitbtn" type="submit" value="Убрать имя" />
    </form>
    <div class="newmsg" >
      <form action="newmsg.php" method="post">
        <input type="text" placeholder="Введите сообщение..." name="msg"><br><br>
        <input class="submitbtn" type="submit" value="Отправить">
      </form>
    </div>
    
    <?php 
      } else {
    ?>
    <h1>Придумайте имя!</h1>
    <div class="setnicknamediv" >
      <form action="setname.php" method="post" >
        <input type="text" name="nickname" placeholder="Введите имя..." /><br><br>
        <input class="submitbtn" type="submit" value="Установить имя" />
      </form>
    </div>
    
    <?php 
      }
    ?>
    
    <div class="messages">
      <?php
        $handle = fopen("msgs.html", "rb");
        echo stream_get_contents($handle);
        fclose($handle);
      ?>
    </div>
  </body>
</html>