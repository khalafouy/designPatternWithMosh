<?php


namespace App\Course\Observer\Exercise;


class Product extends Observerable
{
    private $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
        $this->notify();
    }


}