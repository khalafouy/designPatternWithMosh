<?php


namespace App\Course\TheEssentials\AbstractExample;


class MailService
{


    private function connect()
    {
        echo "Connected <br/>";
    }

    private function disconnect()
    {
        echo "Disconnected <br/>";
    }

    public function sendEmail()
    {
        $this->connect();
        $this->authenticate();
        $this->disconnect();

    }

    private function authenticate()
    {
        echo "You Ready To Send Email <br/>";
    }


}