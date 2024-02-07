<?php
$server = 'localhost';
$database = 'test';
$username = 'root';
$password = '';

$dsn = "mysql:host={$server};dbname={$database}";
$conn = null;

try {
    $conn = new PDO($dsn, $username,$password);
    if ($conn !== null) {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false );

        echo "Connected to the $database database successfully";

        $conn = null; // close the connection when finished
    }
}
catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>