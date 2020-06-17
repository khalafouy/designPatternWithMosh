<?php


namespace App\Course\Command\Solution\framework;


class Button
{
    private $label;

    private Command $command;

    /**
     * Button constructor.
     * @param $command
     */
    public function __construct($command)
    {
        $this->command = $command;
    }


    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    public function click()
    {
        $this->command->execute();
    }

}