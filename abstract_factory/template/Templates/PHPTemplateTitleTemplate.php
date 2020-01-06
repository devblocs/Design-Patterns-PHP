<?php

namespace Templates;

use App\Abstracts\TitleTemplate;

class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h2><?= \$title; ?></h2>";
    }
}