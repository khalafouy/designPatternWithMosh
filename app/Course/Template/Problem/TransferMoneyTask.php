<?php


namespace App\Course\Template\Problem;


class TransferMoneyTask
{
    private AuditTrail $auditTrails;

    /**
     * TransferMoneyTask constructor.
     * @param $auditTrails
     */
    public function __construct($auditTrails)
    {
        $this->auditTrails = $auditTrails;
    }

    public function execute()
    {
        $this->auditTrails->record();
        echo "Transfer Money Done";
    }
}