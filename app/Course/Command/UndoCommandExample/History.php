<?php


namespace App\Course\Command\UndoCommandExample;


class History
{
    private $commandList = [];

    function push($command)
    {
        array_push($this->commandList, $command);
    }

    function pop()
    {
        return array_pop($this->commandList);

    }

    function size()
    {
        return count($this->commandList);
    }


}