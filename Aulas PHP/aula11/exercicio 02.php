<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <?php
  
      $c = 1;
      while ($c <= 5) {
        echo "Valor $c: <input type='number' name='v$c' value='$c' max='100' min='0'/><br/>";
        $c++;
        }
        
    ?>
</div>
</body>
</html>
 