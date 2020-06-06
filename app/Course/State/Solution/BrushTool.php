<?php


namespace App\Course\State\Solution;


class BrushTool implements Tool
{
    public function mouseUp()
    {
        echo "Draw Brush";
    }

    public function mouseDown()
    {
        echo "Select Brush Icon";
    }

}