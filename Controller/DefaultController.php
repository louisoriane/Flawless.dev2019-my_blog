<?php

namespace Controller;

use Model\DBManager;

class DefaultController extends BaseController
{
    public function homeAction()
    {
        $name = 'Puck';
        
        $template = $this->getTwig()->load('home.html.twig');
        echo $template->render(['name' => $name]);
    }
}
