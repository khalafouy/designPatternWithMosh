<?php
namespace App\Course\TheEssentials\Encapsulation;
class Account
{
    private $totalAmount = 0 ;

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     */
    public function setTotalAmount(int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    public function deposit($amount)
    {
        $this->totalAmount+=$amount;
    }

    public function withdraw($amount)
    {
        $this->totalAmount-=$amount;
    }



}