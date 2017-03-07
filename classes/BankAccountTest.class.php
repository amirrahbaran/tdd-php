<?php
use PHPUnit\Framework\TestCase;

class BankAccount
{
	public $balance;
	public function deposit($i) {
		return $this->balance += $i;
	}
}

class BankAccountTest extends TestCase
{
	public function testDeposit() {
		$bank_account = new BankAccount();
		$bank_account->deposit(50);
		$this->assertEquals($bank_account->balance, 50);
	}
}