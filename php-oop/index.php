<?php
require './classes/BankAccount.php';

$accountJoe = new BankAccount("1234567890", "Joe", 100.00);
$accountJoe->deposit(20.0);
$accountJoe->withdraw(30.0);
$accountJoe->deposit(40.0);
$accountJoe->withdraw(15.0);
$accountJoe->deposit(25.0);
$accountJoe->withdraw(35.0);

echo "<p>$accountJoe</p>";
?>