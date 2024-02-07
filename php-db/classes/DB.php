<?php

class DB {
    private $server = 'localhost';
    private $database = 'test';
    private $username = 'root';
    private $password = '';

    private $conn;
    private $dsn;

    public function __construct() {
        $this->dsn = "mysql:host={$this->server};dbname={$this->database}";
        $this->conn = null;
    }

    public function open() {
        if ($this->conn === null) {
            $this->conn = new PDO($this->dsn, $this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
        }
        return $this->conn;
    }

    public function isOpen() {
        return $this->conn !== null;
    }

    public function close() {
        $this->conn = null;
    }
}
?>