<?php

use App\Abstracts\SocialNetworkPoster;

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello world!");
    $creator->post("This is a factory pattern");
}