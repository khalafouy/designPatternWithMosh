<?php


namespace App\Course\Strategy\Exercise;


class MD5Encryption implements Encryption
{
    public function encrypt($message)
    {
        echo "Encrypted By MD5";
    }
}