<?php


namespace App\Course\Strategy\Solution;


class Image
{
    private Filter $filter;
    private Converter $converter;

    /**
     * Image constructor.
     * @param $filter
     * @param $converter
     */
    public function __construct($filter, $converter)
    {
        $this->filter = $filter;
        $this->converter = $converter;
    }


    public function store($fileName)
    {
        $this->filter->apply($fileName);

        $this->converter->convert($fileName);


    }


}

$image = new Image(new BlackAndWhiteFilter() , new PNGConverter());

$image->store('a.png');