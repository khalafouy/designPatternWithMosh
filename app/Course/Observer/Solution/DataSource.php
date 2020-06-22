<?php


namespace App\Course\Observer\Solution;


class DataSource extends Subject
{
    public $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
        $this->notify();
    }


}