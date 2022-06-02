<?php
require "config.php";
include TEMPLATE_PATH."/header.php";
include TEMPLATE_PATH."/nav.php";

/*
 include:
 realiza a importação de um arquivo para nossa página
 e verifica se esse arquivo está funcionando e se ele 
 de fato existe.
*/

/*
 require:
 a função require() importa arquivos, porém,
 caso o mesmo não seja encontrado, será levantado
 uma exceção e a execução é finalizada.
*/


?>

<main>
    <h1>Home</h1>

</main>

<?php
    include TEMPLATE_PATH."/footer.php";
?>
