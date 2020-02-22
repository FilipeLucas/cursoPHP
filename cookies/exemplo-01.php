<?php

$data = array(
    "empresa"=> "Hcode Treinamentos"
);

setcookie("NOME_DO_COOKIE",json_encode($data), time() + 120);

echo "Cokkie criado";

?>