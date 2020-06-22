<?php


namespace App\Course\Observer\Solution;

//Observable
class Subject
{
    public $observers = [];

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