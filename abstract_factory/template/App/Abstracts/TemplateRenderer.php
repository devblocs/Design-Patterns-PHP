<?php

namespace App\Abstracts;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}