<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",",$headers). "\r\n");
//Esse primeiro foreach percorre as linhas
foreach ($usuarios as $row) {
    
    $data = array();
    //Esse percorre as colunas
    foreach ($row as $key => $value) {

        array_push($data, $value);
    
    }//Termina o foreach das colunas

    fwrite($file, implode(",",$data). "\r\n");

}//Termina o foreach das linhas

fclose($file);

echo implode(",",$headers);

?>