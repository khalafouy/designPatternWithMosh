<?php


namespace App\Course\Template\Exercise;


class ChatWindow extends Window
{
    protected function beforeClosing()
    {
        echo "Chat Window Action Before Closing";
        echo "<br/>";
        // TODO: Implement beforeClosing() method.
    }

    protected function afterClosing()
    {

        echo "Chat Window Action After Closing";
        echo "<br/>";
    }

}