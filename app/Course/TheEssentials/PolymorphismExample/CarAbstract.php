<?php


namespace App\Course\TheEssentials\PolymorphismExample;


abstract class CarAbstract
{
    public function sound()
    {
        echo "sound";
    }

    public abstract function name();
}