<?php
class BankAccount
{
    private $balance;

    /**
     * BankAccount constructor.
     * @param $balance
     */
    public function __construct($balance = 0)
    {
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param $money
     * @return mixed
     */
    public function deposit($money) {
        return $this->balance += $money;
    }

    /**
     * @param $money
     * @return mixed
     */
    public function withdraw($money) {
        $this->balance -= $money;
        if ($this->balance < 0) {
            $this->balance -= 5;
        }
        return $this->balance;
    }
}
