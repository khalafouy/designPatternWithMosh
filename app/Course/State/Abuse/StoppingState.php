<?php


namespace App\Course\State\Abuse;


class StoppingState implements StopwatchState
{

    private $stopwatch;

    /**
     * StoppingState constructor.
     * @param $stopwatch
     */
    public function __construct(Stopwatch $stopwatch)
    {
        $this->stopwatch = $stopwatch;
    }

    /**
     * StoppingState constructor.
     */


    public function click()
    {
        echo "Starting";
        $this->stopwatch->setCurrentState(new RunningState($this->stopwatch));
    }


}