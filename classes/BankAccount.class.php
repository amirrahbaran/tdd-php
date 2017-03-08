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
            $this->balance -= $this->calculatePenalty();
        }
        return $this->balance;
    }

    /**
     * @return int
     */
    protected function calculatePenalty() {
        if (isset($this)) {
            if (isset($this->balance)) {
            /** @var TYPE_NAME $this */
                return ((-1) * $this->balance)*(5 / 100);
            }
        }
    }
}
