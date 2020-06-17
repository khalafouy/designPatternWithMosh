<?php


namespace App\Course\Command\Exercise;


class TextCommand extends AbstractUndoableCommand
{
    private $text;
    private $prevText;

    /**
     * TextCommand constructor.
     * @param $text
     * @param $videoEditor
     * @param $history
     */
    public function __construct($text, $videoEditor, $history)
    {
        $this->text = $text;
        $this->videoEditor = $videoEditor;
        $this->history = $history;
        parent::__construct($videoEditor,$history);
    }



    protected function doExecute()
    {
        // TODO: Implement doExecute() method.
        $this->prevText = $this->videoEditor->getText();
        $this->videoEditor->setText($this->text);
    }

    public function unexecute()
    {
        $this->videoEditor->setText($this->prevText);
    }



}