<?php

namespace User;

class User {
    protected $username;
    protected $password;
    protected $name;

    public function __construct($uname, $pwd, $name) {
        $this->username = $uname;
        $this->password = $pwd;
        $this->name = $name;
    }

    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
    public function getName() { return $this->name; }
}
?>