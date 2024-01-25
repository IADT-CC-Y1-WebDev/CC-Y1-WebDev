<?php

namespace User;

require_once './classes/User/User.php';

class Customer extends User {
    protected $address;
    protected $phone;

    public function __construct($uname, $pwd, $name, $addr, $phone) {
        parent::__construct($uname, $pwd, $name);
        $this->address = $addr;
        $this->phone = $phone;
    }

    public function __toString() {
        $format = "Customer username: %s, name: %s, address: %s, phone: %s";
        $str = sprintf(
            $format, 
            $this->username, 
            $this->name, 
            $this->address, 
            $this->phone
        );
        return $str;
    }

    public function getAddress() { return $this->address; }
    public function getPhone() { return $this->phone; }
}
?>