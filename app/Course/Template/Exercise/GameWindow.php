<?php


namespace App\Course\Template\Exercise;


class GameWindow extends Window
{
    protected function beforeClosing()
    {
        echo "Game Window Action Before Closing";
        echo "<br/>";
    }

    protected function afterClosing()
    {

        echo "Game Window Action After Closing";
        echo "<br/>";
    }

}

$window = new GameWindow();

$window->close();