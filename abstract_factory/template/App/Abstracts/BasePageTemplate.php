<?php

namespace App\Abstracts;

use App\Abstracts\PageTemplate;
use App\Abstracts\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}