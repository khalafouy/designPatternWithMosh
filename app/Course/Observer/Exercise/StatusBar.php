<?php


namespace App\Course\Observer\Exercise;


class StatusBar implements Observer
{
    private $product;

    /**
     * StatusBar constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function update()
    {
        dump("Item Price Updated in Status Bar".$this->product->getPrice());
    }

}