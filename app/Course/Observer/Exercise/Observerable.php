<?php


namespace App\Course\Observer\Exercise;


class Observerable
{

    private $observers = [];


    public function addObserver(Observer $observer)
    {
        array_push($this->observers,$observer);
    }

    public function removeObserver(Observer $observer)
    {
        array_diff( $this->observers, [$observer] );
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}