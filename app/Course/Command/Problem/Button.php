<?php


namespace App\Course\Command\Problem;


class Button
{
    private $label;

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
        // Depend on where this button clicked it will make a different action
        // Example click button may be used for saving or delete , update record in database
    }
}