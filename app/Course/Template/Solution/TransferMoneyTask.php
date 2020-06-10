<?php


namespace App\Course\Template\Solution;


class TransferMoneyTask extends Task
{
    protected function doExecute()
    {
       echo "Transfer Money Done";
    }


}
$task = new TransferMoneyTask();
$task->execute();

