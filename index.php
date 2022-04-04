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
    <h1>Общий чат!</h1>
    <div class="newmsg" >
      <form action="newmsg.php" method="post">
        <input type="text" placeholder="Enter message..." name="msg"><br><br>
        <input class="submitbtn" type="submit" value="Send">
      </form>
    </div>
    <div class="messages">
      <?php
        $handle = fopen("msgs.html", "rb");
        echo stream_get_contents($handle);
        fclose($handle);
      ?>
    </div>
  </body>
</html>