<?php


namespace App\Course\Command\UndoCommandExample;


interface UndoableCommand extends Command
{
 public function unexecute();
}