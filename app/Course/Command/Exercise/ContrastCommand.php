<?php


namespace App\Course\Command\Exercise;


class ContrastCommand extends AbstractUndoableCommand
{
    private $contrast;
    private $prevContrast;

    /**
     * ContrastCommand constructor.
     * @param $history
     * @param $videoEditor
     */
    public function __construct($contrast,$videoEditor,$history)
    {
        $this->contrast = $contrast;
       parent::__construct($videoEditor,$history);
    }

    public function doExecute()
    {
        $this->prevContrast = $this->videoEditor->getContrast();
        $this->videoEditor->setContrast($this->contrast);

        // TODO: Implement execute() method.
    }

    public function unexecute()
    {
        $this->videoEditor->setContrast($this->prevContrast);
        // TODO: Implement unexecute() method.
    }

}