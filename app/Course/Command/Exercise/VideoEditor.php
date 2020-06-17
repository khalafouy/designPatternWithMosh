<?php


namespace App\Course\Command\Exercise;


class VideoEditor
{
    private $contrast = 0;
    private $text = "";

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return float
     */
    public function getContrast(): float
    {
        return $this->contrast;
    }

    /**
     * @param float $contrast
     */
    public function setContrast($contrast): void
    {
        $this->contrast = $contrast;
    }

    public function toString()
    {
        return "VideoEditor{ contrast=\"  $this->contrast \" & text=\" . $this->text \"}";
    }


}