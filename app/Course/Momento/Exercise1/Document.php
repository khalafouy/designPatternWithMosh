<?php


namespace App\Course\Momento\Exercise1;


class Document
{
    private $content;
    private $fontName;
    private $fontSize;

    /**
     * Document constructor.
     * @param $content
     * @param $fontName
     * @param $fontSize
     */
    public function __construct($content, $fontName, $fontSize)
    {
        $this->content = $content;
        $this->fontName = $fontName;
        $this->fontSize = $fontSize;
    }

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

    /**
     * @return mixed
     */
    public function getFontName()
    {
        return $this->fontName;
    }

    /**
     * @param mixed $fontName
     */
    public function setFontName($fontName): void
    {
        $this->fontName = $fontName;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize): void
    {
        $this->fontSize = $fontSize;
    }

    public function __toString()
    {
        return "Content is :$this->content , Font Size is : $this->fontSize , Font Name is : $this->fontName";
    }


    public function createState()
    {
        return new DocumentState($this->getContent(),$this->getFontName(),$this->getFontSize());

    }

    public function restoreState(DocumentState $documentState)
    {
        $this->content = $documentState->getContent();
        $this->fontName = $documentState->getFontName();
        $this->fontSize = $documentState->getFontSize();
    }

}

$document = new Document("Content 1",'Font Name 1', "Font Size 1 ");
$documentHistory = new DocumentHistory();
$documentHistory->push($document->createState());

$document->setContent("Content 2");
$document->setContent("Content 3");
$document->setFontName("Font Name 2");

$document->restoreState($documentHistory->pop());

