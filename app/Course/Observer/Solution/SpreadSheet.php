<?php


namespace App\Course\Observer\Solution;


class SpreadSheet implements Observer
{
    private DataSource $dataSource;

    /**
     * SpreadSheet constructor.
     * @param $dataSource
     */
    public function __construct(DataSource $dataSource)
    {

        $this->dataSource = $dataSource;
    }

    public function update()
    {
        dump("SpreadSheet got updated ".$this->dataSource->getValue());
    }

}