<?php
use PHPUnit\Framework\TestCase;
use BankAccount;

class BankAccountTest extends TestCase
{
	public function testDeposit() {
		$bank_account = new BankAccount();
		$this->fail();
	}
}