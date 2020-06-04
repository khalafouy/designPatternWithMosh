<?php


namespace App\Course\Momento\Exercise1;


class DocumentState
{

    private $content;
    private $fontName;
    private $fontSize;

    /**
     * DocumentState constructor.
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
     * @return mixed
     */
    public function getFontName()
    {
        return $this->fontName;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }



}