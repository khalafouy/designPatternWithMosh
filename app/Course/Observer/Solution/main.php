<?php


namespace App\Course\Observer\Solution;


class main
{

    /**
     * main constructor.
     */
    public function __construct()
    {
        $dataSource = new DataSource();
        $sheet1 = new SpreadSheet($dataSource);
        $sheet2 = new SpreadSheet($dataSource);
        $chart = new Chart($dataSource);

        $dataSource->addObserver($sheet1);
        $dataSource->addObserver($sheet2);
        $dataSource->addObserver($chart);

        $dataSource->setValue(100);



    }
}