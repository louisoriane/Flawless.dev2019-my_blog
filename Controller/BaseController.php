<?php

namespace Controller;

class BaseController
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }
    
    protected function getTwig()
    {
        return $this->twig;
    }
}
