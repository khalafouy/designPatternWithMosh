<?php


namespace App\Course\Command\Exercise;


abstract class AbstractUndoableCommand implements UndoableCommand
{
    protected VideoEditor $videoEditor;
    protected History $history;

    /**
     * AbstractUndoableCommand constructor.
     * @param $videoEditor
     * @param $history
     */
    public function __construct($videoEditor, $history)
    {
        $this->videoEditor = $videoEditor;
        $this->history = $history;
    }


    public function execute()
    {
        $this->doExecute();
        $this->history->push($this);

        // TODO: Implement execute() method.
    }

    protected abstract function doExecute();


}