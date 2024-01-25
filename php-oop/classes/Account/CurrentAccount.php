<?php

namespace Account;

require_once './classes/Account/BankAccount.php';

class CurrentAccount extends BankAccount {

    protected const FREE_TRANSACTIONS = 3;
    protected const TRANSACTION_FEE = 1.50;

	protected $transactionCount;

	public function __construct($num, $name, $balance) {
        parent::__construct($num, $name, $balance);
        $this->transactionCount = 0;
	}

    public function deposit($amount) {
		$this->transactionCount++;
        parent::deposit($amount);
	}

	public function withdraw($amount) {
		$this->transactionCount++;
        parent::withdraw($amount);
	}

    public function deductFees() {
        if ($this->transactionCount > self::FREE_TRANSACTIONS) {
            $numTrans = ($this->transactionCount - self::FREE_TRANSACTIONS);
            $fees = self::TRANSACTION_FEE * $numTrans;
            parent::withdraw($fees);
        }
        $this->transactionCount = 0;
    }
}

?>