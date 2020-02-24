<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){
/**
 * Para tratar a vulnerabilidade, coloca-se o comando escapeshellcmd() e o comando via POST vai escapar da análise;
 */
    $cmd =escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";

    $comando = system($cmd, $retorno);

    echo"</pre>";

}

?>
<form method="post">
    
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>