<?php


namespace App\Course\Template\Exercise;


abstract class Window
{

    public function close()
    {
        echo "Close Window Screen ";
        echo "<br/>";

    }

    protected abstract function beforeClosing();

    protected abstract function afterClosing();
}