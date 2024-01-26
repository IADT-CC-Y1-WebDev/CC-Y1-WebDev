<?php
require_once "./etc/config.php";

use Account\BankAccount;
use Account\SavingsAccount;
use Account\CurrentAccount;

use User\Employee;
use User\Customer;

$accountJoe = new BankAccount("1234567890", "Joe", 100.00);
$accountJoe->deposit(20.0);
$accountJoe->withdraw(30.0);
$accountJoe->deposit(40.0);
$accountJoe->withdraw(15.0);
$accountJoe->deposit(25.0);
$accountJoe->withdraw(35.0);

$savingsAsha = new SavingsAccount("4567890123", "Asha", 100.00, 0.05);
$savingsAsha->deposit(20.0);
$savingsAsha->withdraw(30.0);
$savingsAsha->deposit(40.0);
$savingsAsha->withdraw(15.0);
$savingsAsha->deposit(25.0);
$savingsAsha->withdraw(35.0);
$savingsAsha->addInterest();

$currentDiego = new CurrentAccount("7890123456", "Diego", 100.00);
$currentDiego->deposit(20.0);
$currentDiego->withdraw(30.0);
$currentDiego->deposit(40.0);
$currentDiego->withdraw(15.0);
$currentDiego->deposit(25.0);
$currentDiego->withdraw(35.0);
$currentDiego->deductFees();

$accounts = BankAccount::findAll();
foreach($accounts as $acc) {
    echo "<p>" . $acc . "</p>";
}

$num = "1234567890";
$account = BankAccount::findByNumber($num);
if ($account !== null) {
    echo "<p>Found " . $account . "</p>";
}
else {
    echo "Account number $num not found";
}

$employee = new Employee("hbloggs", "secret", "Harry Bloggs", "1230984576");
echo "<p>$employee</p>";

$customer = new Customer("wangm", "secret123", "Wang Mei", "10 Main St", "087-1239874");
echo "<p> $customer</p>";
?>