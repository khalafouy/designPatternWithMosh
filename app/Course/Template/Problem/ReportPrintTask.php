<?php


namespace App\Course\Template\Problem;


class ReportPrintTask
{
    private AuditTrail $auditTrails;

    /**
     * TransferMoneyTask constructor.
     * @param $auditTrails
     */
    public function __construct()
    {
        $this->auditTrails = new AuditTrail();
    }
    public function execute()
    {
        $this->auditTrails->record();
        echo "Print Report Done";
    }
}