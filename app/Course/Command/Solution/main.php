<?php

namespace App\Course\Command\Solution;


use App\Course\Command\Solution\framework\Button;

class main
{

    /**
     * main constructor.
     */
    public function __construct()
    {
        $customerService = new CustomerService();
        $addCustomerCommand = new AddCustomerCommand($customerService);
        $button = new Button($addCustomerCommand);
        $button->click();
    }
}