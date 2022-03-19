<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Welcome!</title>
</head>
<body>
  
  <style>
    #time {
      background-color: green;
      transition: 2s;
      width: 150px;
      height: 50px;
      border-radius: 10px;
    } time:hover {
      background-color: yellow;
      height: 55px;
      width: 165px;
    }
  </style>
  
  <h1 align="center" >Hello! You see my test page.</h1>
  <p align="center" >Check your time here \/</p>
<button align="center" id="time" onclick="alert(new Date())">Time</button>
<p align="center" ><? date_defaault_timezone_set("Europe/Moscow"); echo date("h:i:s"); ?></p>
</body>
</html>