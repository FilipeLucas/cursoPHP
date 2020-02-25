<form method="post">

<input type="text" name="busca">
<button type="submit">Enviar</button>

</form>

<?php

if (isset($_POST['busca'])){
    //metodo para liberar algumas tags
    //echo strip_tags($_POST['busca'], "<strong><a>");
    //metodo para escrever as tags na busca, impedindo assim 
    //que elas sejam executadas.
    echo htmlentities(($_POST['busca']));

}

?>