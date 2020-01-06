<?php

namespace App\Interfaces;

/**
 * interface that defines the behaviour of different types of products
 */
interface SocialNetworkConnector{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}