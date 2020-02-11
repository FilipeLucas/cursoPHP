<?php

function teste($callBack){

    //Processo lento

    $callBack();

}

teste(function(){

    echo "Terminou";
    
});

?>