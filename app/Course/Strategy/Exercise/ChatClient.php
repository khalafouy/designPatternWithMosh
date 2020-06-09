<?php


namespace App\Course\Strategy\Exercise;


class ChatClient
{

    private Encryption $encryption;

    /**
     * ChatClient constructor.
     * @param $encryption
     */
    public function __construct($encryption)
    {
        $this->encryption = $encryption;
    }

    public function encrypt($message)
    {
        $this->encryption->encrypt($message);
    }


}

$encryption = new HashEncryption();
$encryption->encrypt("Khalaf Test");
