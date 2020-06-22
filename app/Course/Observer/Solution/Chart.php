<?php


namespace App\Course\Observer\Solution;


class Chart implements Observer
{
    private $dataSource;

    /**
     * Chart constructor.
     * @param $dataSource
     */
    public function __construct($dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function update()
    {
        dump("Chart got updated ".$this->dataSource->getValue());
    }

}