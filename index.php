<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>GeLite</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
      <header class="head1" >
        <a href="/"><strong id="size40" >Test forum</strong></a>
        <br>
        <br>
        <nav>
          <button id="registerbutton"><a href="openforum/index.php" >Forum(Beta)</a></button>
        </nav>
      </header>
      <div style="text-align: center;" >
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="padding: 10px; background-color: black; border-radius: 10px; color: white; text-align: center; width: 30%; position: relative; left: 50%; transform: translate(-50%, 0px)" >
          <h1>New message</h1>
          <form action="newmsg.php" method="post">
            <input style="font-size: 20px; background-color: white; border-radius: 10px;" type="text" name="subjw" placeholder="Enter subject..." /><br><br>
            <input style="font-size: 20px; background-color: white; border-radius: 10px;" type="text" name="messagew" placeholder="Enter message..." /><br><br>
            <input style="border-radius: 10px; background-color: orange; font-size: 30px; padding: 10px; width: 35%;" type="submit" value="Post" />
          </form>
        </div>
        <br>
        <br>
        <?php echo readfile("messages.html"); ?>
      </div>
  </body>
</html>