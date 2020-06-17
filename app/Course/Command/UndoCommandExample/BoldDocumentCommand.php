<?php


namespace App\Course\Command\UndoCommandExample;


class BoldDocumentCommand implements UndoableCommand
{
    private $prevContent;
    private $document;
    private $history ;

    /**
     * BoldDocumentCommand constructor.
     * @param $document
     * @param $history
     */
    public function __construct($document , $history)
    {
        $this->document = $document;
        $this->history = $history;
    }

    public function execute()
    {
        $this->setPrevContent($this->document->getContent());
        $this->document->makeBold();
        $this->history->push($this);

    }

    public function unexecute()
    {
         return $this->document->setContent($this->getPrevContent());
    }

    /**
     * @return mixed
     */
    public function getPrevContent()
    {
        return $this->prevContent;
    }

    /**
     * @param mixed $prevContent
     */
    public function setPrevContent($prevContent): void
    {
        $this->prevContent = $prevContent;
    }



}