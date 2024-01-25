<?php
class BankAccount {

	public $number;
    public $name;
	public $balance;

	public function __construct($num, $name, $bal) {
		$this->number = $num;
        $this->name = $name;
		$this->balance = $bal;
	}

	public function __toString() {
		$format = "Account number: %s, name: %s, balance: %01.2f";
		$str = sprintf(
			$format, 
			$this->number, 
			$this->name, 
			$this->balance
		);
		return $str;
	}
	
	public function deposit($amount) {
		if ($amount <= 0) {
            throw new Exception("Illegal amount");
        }
    	$this->balance += $amount;
	}

	public function withdraw($amount) {
		if ($amount > $this->balance) {
            throw new Exception("Insufficent funds");
        }
		$this->balance -= $amount;
	}
}

?>