<?php


namespace App\Course\Template\Problem;


class AuditTrail
{
    public function record()
    {
        echo "This action recorded at  ".date("Y-m-d");
    }
}