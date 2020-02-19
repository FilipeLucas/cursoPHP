<?php

$file = fopen("log.txt", "a+");

fwrite($file, date("d:m:Y H:s:i"). "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

?>