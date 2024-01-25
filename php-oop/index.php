<?php
require_once './classes/BankAccount.php';
require_once './classes/SavingsAccount.php';
require_once './classes/CurrentAccount.php';

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
?>