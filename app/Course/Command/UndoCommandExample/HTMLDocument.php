<?php


namespace App\Course\Command\UndoCommandExample;


class HTMLDocument
{
    private $content;


    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }


   public function makeBold()
    {
        $this->setContent('<b>'.$this->content."</b>");

    }
}