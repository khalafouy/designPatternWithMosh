<?php


namespace App\Course\Observer\Exercise;


class StockList implements Observer
{
    private $product;

    /**
     * StockList constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function update()
    {
        // TODO: Implement update() method.

        dump("Item Price Updated in Stock list " . $this->product->getPrice());
    }

}