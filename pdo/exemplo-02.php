<?php 
//Conectando com o SQL Server;
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "root", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt-> execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."<br/>";
    }
    echo "************************************************<br>";
}

//var_dump($results);

//
echo 'Current PHP version: ' . phpversion();

?>