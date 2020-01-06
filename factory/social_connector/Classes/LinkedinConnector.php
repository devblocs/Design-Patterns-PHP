<?php

namespace Classes;

use App\Interfaces\SocialNetworkConnector;

class LinkedinConnector implements SocialNetworkConnector{

    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Sending HTTP API request with login id: {$this->login} and password: {$this->password} \n";
    }

    public function logOut(): void
    {
        echo "Sent HTTP API request to logout user {$this->login} \n";
    }

    public function createPost($content): void
    {
        echo "Created post on linkedin \n";
    }
}