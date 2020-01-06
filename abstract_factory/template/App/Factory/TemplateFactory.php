<?php

namespace App\Factory;

use App\Abstracts\PageTemplate;
use App\Abstracts\TitleTemplate;
use App\Abstracts\TemplateRenderer;

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
    
}