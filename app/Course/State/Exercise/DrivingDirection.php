<?php


namespace App\Course\State\Exercise;


class DrivingDirection implements TravelMode
{
    public function getETA()
    {
        echo  "ETA FROM DRIVING MODE";
        return 1;
    }

    public function getDirection()
    {

        echo  "DIRECTION FROM DRIVING MODE";
        return 1;
    }

}