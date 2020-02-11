<form>
    <input type="text" name="nome">
    <input type="submit" name="Enviar">
</form>

<?php

if (isset ($_GET)){
    
    foreach ($_GET as $key => $value) {
        $nome = $value;
    break;
    }

    ola($nome);

}

function ola(&$nome){

    //echo "<h1>Olá $nome!</h1>";
    return "<h1>Olá $nome!</h1>";
    
}

echo ola($nome);

?>