<?php

require_once("vendor/autoload.php");

//use Slim\Slim;
$app = new \Slim\Slim();

$app->get('/', function(){

    echo json_encode(array(
        'date'=>date("d/m/Y")
    ));

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>