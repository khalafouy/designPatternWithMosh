<?php


namespace App\Course\Strategy\Exercise;


class HashEncryption implements Encryption
{
    public function encrypt($message)
    {
        echo "Encrypted By Hash";
    }

}