<?php


namespace App\Course\Observer\Exercise;


class main
{

    /**
     * main constructor.
     */
    public function __construct()
    {
        $product1 = new Product();


        $product1->addObserver(new StatusBar($product1));
        $product1->addObserver(new StockList($product1));

        $product1->setPrice(92);
    }
}