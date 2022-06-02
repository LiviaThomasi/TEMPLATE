<?php
require "config.php";
include TEMPLATE_PATH."/header.php";
include TEMPLATE_PATH."/nav.php";

?>

   

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <main>
   <h1>Contatos</h1>
    <form action="index.php" method="POST">
<input type="text" name="nome" placeholter="Nomezinho">
  
 <input type="text" name="assunto" placeholter="assunto">

    
             
 <textarea name="mensagem" placeholter="mensagem" rows ="20"></textarea>
 <input type="submit" value="enviar">

 </form>
</main>
</body>
</html>
</main>

  
