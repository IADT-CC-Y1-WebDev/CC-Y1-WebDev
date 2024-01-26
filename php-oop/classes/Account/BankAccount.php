<?php

namespace Account;

class BankAccount {

	private static $accounts = [];

	public static function findAll() {
		return self::$accounts;
	}

	public static function findByNumber($num) {
		$result = null;
		if (array_key_exists($num, self::$accounts)) {
			$result = self::$accounts[$num];
		}
		return $result;
	}

	protected $number;
    protected $name;
	protected $balance;

	public function __construct($num, $name, $bal) {
		$this->number = $num;
        $this->name = $name;
		$this->balance = $bal;

		self::$accounts[$num] = $this;
	}

    public function getNumber() { return $this->number; }
    public function getName() { return $this->name; }
    public function getBalance() { return $this->balance; }

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

	public function __destruct() {
		if (array_key_exists($this->number, self::$accounts)) {
			unset(self::$accounts[$this->number]);
		}
	}
}

?>