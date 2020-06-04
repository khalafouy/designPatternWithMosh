<?php


namespace App\Course\Momento\Exercise1;


class DocumentHistory
{
    private $documentStates = [];

    public function push($state)
    {
        array_push($this->documentStates, $state);
    }

    public function pop()
    {
        $lastItem = array_pop($this->documentStates);
        return $lastItem;
    }

    public function toArray()
    {
        return $this->documentStates;
    }
}