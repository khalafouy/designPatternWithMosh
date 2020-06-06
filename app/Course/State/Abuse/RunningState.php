<?php


namespace App\Course\State\Abuse;


class RunningState implements StopwatchState
{
    private $stopwatch;


    /**
     * RunningState constructor.
     * @param $stopwatch
     */
    public function __construct(Stopwatch $stopwatch)
    {
        $this->stopwatch = $stopwatch;
    }

    public function click()
    {
        echo "Stopping";
        $this->stopwatch->setCurrentState(new StoppingState($this->stopwatch));
    }


}