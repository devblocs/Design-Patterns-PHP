<?php

namespace App\Factory\Templates;

use App\Abstracts\PageTemplate;
use App\Abstracts\TitleTemplate;
use App\Factory\TemplateFactory;
use Renderer\PHPTemplateRenderer;
use App\Abstracts\TemplateRenderer;
use Templates\PHPTemplatePageTemplate;
use Templates\PHPTemplateTitleTemplate;

/**
 * And this Concrete Factory creates PHPTemplate templates.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}