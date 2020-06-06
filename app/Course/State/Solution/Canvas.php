<?php


namespace App\Course\State\Solution;


class Canvas
{
    private Tool $currentSelectedTool;

    /**
     * @return mixed
     */
    public function getCurrentSelectedTool()
    {
        return $this->currentSelectedTool;
    }

    /**
     * @param mixed $currentSelectedTool
     */
    public function setCurrentSelectedTool($currentSelectedTool): void
    {
        $this->currentSelectedTool = $currentSelectedTool;
    }

    public function mouseUp()
    {
        $this->currentSelectedTool->mouseUp();
    }

    public function mouseDown()
    {
        $this->currentSelectedTool->mouseDown();

    }

}


$canvas = new Canvas();

$canvas->setCurrentSelectedTool(new BrushTool());

$canvas->mouseUp();

$canvas->mouseDown();

