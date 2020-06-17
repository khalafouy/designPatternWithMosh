<?php


namespace App\Course\Command\Exercise;


class History
{
    private $commandList = [];

    public function push($command)
    {
        array_push($this->commandList, $command);
    }

    public function pop()
    {
        return array_pop($this->commandList);
    }

    public function size()
    {
        return count($this->commandList);
    }

}