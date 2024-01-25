<?php
require_once './classes/BankAccount.php';

class SavingsAccount extends BankAccount {
    protected $interestRate;

    public function __construct($num, $name, $balance, $rate) {
		parent::__construct($num, $name, $balance);
		$this->interestRate = $rate;
	}

    public function __toString() {
		$format = "Account number: %s, name: %s, balance: %01.2f, interest rate: %01.2f";
		$str = sprintf(
			$format, 
			$this->number, 
			$this->name, 
			$this->balance,
            $this->interestRate
		);
		return $str;
	}
    
    public function getInterestRate() {
        return $this->interestRate;
    }

    public function setInterestRate($rate) {
        $this->interestRate = $rate;
    }

    public function addInterest() {
        $interest = $this->interestRate * $this->balance;
        $this->deposit($interest);
    }
}

?>