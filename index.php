<?php
require_once('init.inc.php');

$bank_account = new BankAccount();
$bank_account->deposit(50);
echo "Bank Account Balance is " . $bank_account->getBalance();