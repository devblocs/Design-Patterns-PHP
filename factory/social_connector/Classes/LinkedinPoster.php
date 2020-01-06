<?php

namespace Classes;

use Classes\LinkedinConnector;
use App\Abstracts\SocialNetworkPoster;
use App\Interfaces\SocialNetworkConnector;

class LinkedinPoster extends SocialNetworkPoster{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector($this->login, $this->password);
    }
}