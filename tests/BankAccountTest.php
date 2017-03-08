<?php
use PHPUnit\Framework\TestCase;

require_once('classes/BankAccount.class.php');

class BankAccountTest extends TestCase
{
    /**
     *
     */
    public function testDeposit() {
        $bank_account = new BankAccount();
        $bank_account->deposit(50);
        $this->assertEquals($bank_account->getBalance(), 50);
    }

    /**
     *
     */
    public function testWithdraw() {
        $bank_account = new BankAccount(50);
        $bank_account->withdraw(30);
        $this->assertEquals($bank_account->getBalance(), 20);
    }

    /**
     * After withdrawing money when the balance would be negative
     * the BankAccount get %5 negative amounts as its income
     */
    public function testWithdrawWithPenalty() {
        $bank_account = new BankAccount(10);
        $bank_account->withdraw(30);
        $this->assertEquals($bank_account->getBalance(), -21);
    }
}
