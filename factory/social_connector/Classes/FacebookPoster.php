<?php

namespace Classes;

use Classes\FacebookConnector;
use App\Abstracts\SocialNetworkPoster;
use App\Interfaces\SocialNetworkConnector;

/**
 * This Concrete Creator supports Facebook.
 */
class FacebookPoster extends SocialNetworkPoster{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}