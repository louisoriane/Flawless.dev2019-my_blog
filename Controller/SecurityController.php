<?php

namespace Controller;

use Model\UserManager;

class SecurityController extends BaseController
{
    public function loginAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            if ($manager->userCheckLogin($_POST))
            {
                $manager->userLogin($_POST['username']);
                $this->redirect('home');
            }
            else {
                $error = "Invalid username or password";
            }
        }
        echo $this->renderView('login.html.twig', ['error' => $error]);
    }

    public function logoutAction()
    {
        session_destroy();
        echo $this->redirect('login');
    }

    public function registerAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            if ($manager->userCheckRegister($_POST))
            {
                $manager->userRegister($_POST);
                $this->redirect('home');
            }
            else {
                $error = "Invalid data";
            }    
        }
        echo $this->renderView('register.html.twig', ['error' => $error]);
    }

    public function addAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $manager->userArticle($_POST);
        }
        echo $this->renderView('login.html.twig', ['error' => $error]);
    }

    public function commentAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {

            $manager = UserManager::getInstance();
            $comment = $manager->userComment($_POST);

            $comment = $manager->getComment($_POST['article_name']);
            echo json_encode(['username' => $comment]);
        }
    }
}
