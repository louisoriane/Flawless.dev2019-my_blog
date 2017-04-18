<?php

namespace Controller;

use Model\UserManager;

class DefaultController extends BaseController
{
    public function homeAction()
    {
        if (!empty($_SESSION['user_id']))
        {
            $manager = UserManager::getInstance();
            $user = $manager->getUserById($_SESSION['user_id']);
            
            echo $this->renderView('home.html.twig');

            $article = $manager->getArticle($user['username']);
            foreach ($article as $value) {
                echo $this->renderView('showarticle.html.twig',
                                   [
                                   'title' => $value['title'], 
                                   'description' => $value['description'],
                                   'username' => $value['username'],
                                   'date' => $value['date'],
                                   ]
                                   );
                // echo $this->renderView('commentaire.html.twig');
            }

        }
        else
            echo $this->renderView('login.html.twig');
    }

    public function articleAction()
    {
        if (!empty($_SESSION['user_id']))
            echo $this->renderView('article.html.twig');
        else
            $this->redirect('login');
    }
}
