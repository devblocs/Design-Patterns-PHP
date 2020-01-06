<?php

use Classes\Page;
use App\Factory\Templates\PHPTemplateFactory;

require_once __DIR__.'/vendor/autoload.php';

$page = new Page("Sample Page", "This is the body content");

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory);