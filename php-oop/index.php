<?php
require_once './classes/BankAccount.php';
require_once './classes/SavingsAccount.php';

$accountJoe = new BankAccount("1234567890", "Joe", 100.00);
$accountJoe->deposit(20.0);
$accountJoe->withdraw(30.0);
$accountJoe->deposit(40.0);
$accountJoe->withdraw(15.0);
$accountJoe->deposit(25.0);
$accountJoe->withdraw(35.0);

echo "<p>$accountJoe</p>";

$savingsAsha = new SavingsAccount("4567890123", "Asha", 100.00, 0.05);
$savingsAsha->deposit(20.0);
$savingsAsha->withdraw(30.0);
$savingsAsha->deposit(40.0);
$savingsAsha->withdraw(15.0);
$savingsAsha->deposit(25.0);
$savingsAsha->withdraw(35.0);
$savingsAsha->addInterest();

echo "<p>$savingsAsha</p>";
?>