<?php


namespace App\Course\Command\Exercise;


class UndoCommand implements Command
{
    private $history;

    /**
     * UndoCommand constructor.
     * @param $history
     */
    public function __construct($history)
    {
        $this->history = $history;
    }

    public function execute()
    {
        if ($this->history->size() > 0) {
            ($this->history->pop())->unexecute();
        }
    }
}