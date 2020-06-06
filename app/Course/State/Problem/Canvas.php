<?php


namespace App\Course\State\Problem;


class Canvas
{
    public  Tool $currentSelectedTool;

    /**
     * @param mixed $currentSelectedTool
     */
    public function setCurrentSelectedTool($currentSelectedTool): void
    {
        $this->currentSelectedTool = $currentSelectedTool;
    }

    /**
     * @return mixed
     */
    public function getCurrentSelectedTool()
    {
        return $this->currentSelectedTool;
    }

    public function mouseUp()
    {
        if($this->currentSelectedTool->name == "Brush")
        {
            echo "Draw Brush";
        }
        elseif ($this->currentSelectedTool->name == "Eraser")
        {
            echo "Draw Eraser";
        }

    }

    public function mouseDown()
    {
        if($this->currentSelectedTool->name == "Brush")
        {
            echo "Select Brush";
        }
        elseif ($this->currentSelectedTool->name == "Eraser")
        {
            echo "Select Eraser";
        }
    }

}