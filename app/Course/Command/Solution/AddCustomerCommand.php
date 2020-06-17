<?php


namespace App\Course\Command\Solution;


use App\Course\Command\Solution\framework\Command;

class AddCustomerCommand implements Command
{
    private $service;

    /**
     * AddCustomerCommand constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->service = $service;
    }

    public function execute()
    {
        $this->service->addCustomer();
    }


}