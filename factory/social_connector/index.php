<?php

use Classes\FacebookPoster;
use Classes\LinkedinPoster;

require __DIR__.'/vendor/autoload.php';

include_once __DIR__."/libraries/helpers.php";

echo "Testing Facebook Creator: \n";
clientCode(new FacebookPoster("john_smith", "********"));
echo "\n\n";


echo "Testing Linkedin Creator: \n";
clientCode(new LinkedinPoster("john_smith@example.com", "********"));
echo "\n\n";