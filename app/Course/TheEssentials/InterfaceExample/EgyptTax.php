<?php


namespace App\Course\TheEssentials;


class EgyptTax implements ITax
{
    public function calculateTax()
    {
        return 14;
    }


}