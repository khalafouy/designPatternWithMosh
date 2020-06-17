<?php


namespace App\Course\Command\Exercise;


interface UndoableCommand extends Command
{
    public function unexecute();
}