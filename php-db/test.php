<?php
require_once "./etc/config.php";

try {
    $db = new DB();
    $conn = $db->open();

    $sql = "SELECT * FROM profiles";
    $stmt = $conn->prepare($sql);
    $status = $stmt->execute();

    if (!$status) {
        $error_info = $stmt->errorInfo();
        $message = sprintf(
            "SQLSTATE error code: %d; error message: %s",
            $error_info[0],
            $error_info[2]
        );
        throw new Exception($message);  
    }

    echo "<pre>";
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    while ($row !== FALSE) {
        print_r($row);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    echo "</pre>";

    echo "Connected successfully to the database";
}
catch (PDOException $ex) {
    echo $ex->getMessage();
}
finally {
    if ($db != null && $db->isOpen()) {
        $db->close();
    }
}
?>

