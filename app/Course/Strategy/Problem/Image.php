<?php


namespace App\Course\Strategy\Problem;


class Image
{
    private Filter $filter;
    private Converter $converter;

    public function store()
    {
        if($this->converter->getType()=="JPEG")
        {
            echo "Apply JPEG Converting";
        }

        if($this->converter->getType()=="PNG")
        {
            echo "Apply PNG Converting";
        }


        if($this->filter->getName()=="B&W")
        {
            echo "Apply Black & White Filter";
        }

        if($this->filter->getName()=="Retro")
        {
            echo "Apply Retro Filter";
        }

    }
}