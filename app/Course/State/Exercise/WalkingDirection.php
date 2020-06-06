<?php


namespace App\Course\State\Exercise;


class WalkingDirection implements TravelMode
{
    public function getETA()
    {
        echo  "ETA FROM WALKING MODE";
        return 2;
    }

    public function getDirection()
    {

        echo  "DIRECTION FROM WALKING MODE";
        return 2;
    }

}