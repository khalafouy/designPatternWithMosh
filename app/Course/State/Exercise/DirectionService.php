<?php


namespace App\Course\State\Exercise;


class DirectionService
{
    private TravelMode $travelMode;

    /**
     * @return mixed
     */
    public function getTravelMode()
    {
        return $this->travelMode;
    }

    /**
     * @param mixed $travelMode
     */
    public function setTravelMode(TravelMode $travelMode): void
    {
        $this->travelMode = $travelMode;
    }


    public function getETA()
    {

        $this->travelMode->getETA();
    }

    public function getDirection()
    {
        $this->travelMode->getDirection();

    }
}


$directionService = new DirectionService();
$directionService->setTravelMode(new WalkingDirection());
$directionService->getDirection();
$directionService->getETA();
