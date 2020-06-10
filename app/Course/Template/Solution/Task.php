<?php


namespace App\Course\Template\Solution;


abstract class Task
{
    private $auditTrail;

    /**
     * Task constructor.
     *
     */
    public function __construct()
    {
        $this->auditTrail = new AuditTrail();
    }

    public function execute()
    {
        $this->auditTrail->record();
    }
    protected abstract function doExecute();


}