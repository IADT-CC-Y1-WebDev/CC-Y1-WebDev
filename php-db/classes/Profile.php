<?php

class Profile {

    public $id;
    public $name;
    public $age;
    public $category;
    public $experience;
    public $languages;

    public function __construct($props = null) {
        if ($props != null) {
            if (array_key_exists("id", $props)) {
                $this->id = $props["id"];
            }
            $this->name = $props["name"];
            $this->age  = $props["age"];
            $this->category = $props["category"];
            $this->experience  = $props["experience"];
            $this->languages = $props["languages"];
        }
    }

    public static function findAll() {
        $profiles = array();

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

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                while ($row !== FALSE) {
                    $profile = new Profile($row);
                    $profiles[] = $profile;

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $profiles;
    }

    public static function findById($id) {
        $profile = null;

        try {
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM profiles WHERE id = :id";
            $params = [
                ":id" => $id
            ];
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute($params);

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message = sprintf(
                    "SQLSTATE error code: %d; error message: %s",
                    $error_info[0],
                    $error_info[2]
                );
                throw new Exception($message);
            }

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $profile = new Profile($row);
            }
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $profile;
    }
}
?>
