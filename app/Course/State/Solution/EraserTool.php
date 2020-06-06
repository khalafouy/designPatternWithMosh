<?php


namespace App\Course\State\Solution;


class EraserTool implements Tool
{
    public function mouseUp()
    {
        echo "Draw Eraser";
    }

    public function mouseDown()
    {
        echo "Select Eraser Icon";
    }


}