<?php

namespace Renderer;

use App\Abstracts\TemplateRenderer;

class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        \Twig::render($templateString, $arguments);
    }
}