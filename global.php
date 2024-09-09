<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  *{
    background-color: #4682b4;
    color:white;
   
    font-family:sans-serif;
  }</style>
</head>
<body>
   
   <?php
    echo "<br>SÜPER KÜRESEL DEĞİŞKEN SERVER: ".$_SERVER['PHP_SELF'];
    echo "<br>";
      $x = 99;
      $y = 1;
  
  function toplama() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  
  toplama();
  echo "<br>SÜPER KÜRESEL DEĞİŞKEN GLOBAL: ".$z;
    
    ?>
    <a href="kopru.html"><button >Geri Dön</button></a>  
</body>
</html>