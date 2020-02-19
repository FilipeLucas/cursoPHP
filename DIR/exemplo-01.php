<?php

$name = "images";

if (!is_dir($name)){

    mkdir($name);
    echo "Diretório $name criado com sucesso";

}else{
    //Para deletar um diretório
    //rmdir($name);
    echo "O diretório $name já existe: ";

}

?>