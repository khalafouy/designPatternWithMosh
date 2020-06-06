<?php


namespace App\Course\State\Abuse;


class Stopwatch
{
    private $currentState ;

    /**
     * Stopwatch constructor.
     * @param StoppingState $currentState
     */
    public function __construct()
    {
        $this->currentState = new StoppingState($this);
    }

    /**
     * @return StoppingState
     */
    public function getCurrentState(): StopwatchState
    {
        return $this->currentState;
    }

    /**
     * @param StoppingState $currentState
     */
    public function setCurrentState(StopwatchState $currentState): void
    {
        $this->currentState = $currentState;
    }



    public function click(){

        $this->currentState->click();
    }
}

$stopwatch = new Stopwatch();
$stopwatch->click();
//$stopwatch->click();
