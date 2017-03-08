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
     * the BankAccount gets %5 negative amounts as its penalty
     */
    public function testWithdrawWithPenalty() {
        $bank_account = new BankAccount(10);
        $bank_account->withdraw(30);
        // percentage = (10 - 30) * (5 / 100) = 1
        // penalty = (10 - 30) + 1 = 21
        $this->assertEquals($bank_account->getBalance(), -21);
    }
}
