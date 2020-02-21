<?php

$file = fopen("texte.txt", "w+");

fclose($file);

unlink("texte.txt");

echo "Arquivo removido com sucesso";

?>