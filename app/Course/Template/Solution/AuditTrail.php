<?php


namespace App\Course\Template\Solution;


class AuditTrail
{
    public function record()
    {
        echo "This Action Recorded At " . date('Y-m-d');
    }
}