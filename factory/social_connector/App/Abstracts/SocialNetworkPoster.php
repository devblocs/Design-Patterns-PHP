<?php

namespace App\Abstracts;

use App\Interfaces\SocialNetworkConnector;

/**
 * Creator class that defines the factory method
 */
abstract class SocialNetworkPoster{

    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}