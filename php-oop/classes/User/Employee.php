<?php

namespace User;

require_once './classes/User/User.php';

class Employee extends User {
    protected $staffNumber;

    public function __construct($uname, $pwd, $name, $sNumber) {
        parent::__construct($uname, $pwd, $name);
        $this->staffNumber = $sNumber;
    }

    public function __toString() {
        $format = "Employee username: %s, name: %s, staff number: %s";
        $str = sprintf(
            $format, 
            $this->username, 
            $this->name, 
            $this->staffNumber
        );
        return $str;
    }

    public function getStaffNumber() { return $this->staffNumber; }
}
?>