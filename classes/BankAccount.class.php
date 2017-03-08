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
     * @param $i
     * @return mixed
     */
    public function deposit($i) {
        return $this->balance += $i;
    }

    /**
     * @param $i
     * @return mixed
     */
    public function withdraw($i) {
        $this->balance -= $i;
        if ($this->balance < 0) {
            $this->balance -= 5;
        }
        return $this->balance;
    }
}
