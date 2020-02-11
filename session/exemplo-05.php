<?php

//require_once ("config.php");

//echo session_save_path();
echo "<br>";
var_dump(session_status());


switch (session_status()){

    case PHP_SESSION_DISABLED:
        echo "Sessões inativas";
    break;
    case PHP_SESSION_ACTIVE:
        echo "Sessões ativas";
    break;
    case PHP_SESSION_NONE:
        echo "Sessão ativa mas não iniciada";
    break;

}
?>