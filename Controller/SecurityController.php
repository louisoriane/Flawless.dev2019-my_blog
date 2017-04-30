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
            }
            else {
                $error = "Pseudo ou Mot de passe invalide.";
            }
        }
        echo $this->renderView('login.html.twig', ['error' => $error]);
    }

    public function logoutAction()
    {
        session_destroy();
        echo $this->redirect('home');
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
            }
            else {
                $error = "Invalid data";
            }    
        }
        echo $this->renderView('register.html.twig', ['error' => $error]);
    }

    public function addArticleAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $manager->userArticle($_POST);
        }
        else {
            $error = "Invalid data";
        }
    }

    public function commentsAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $comment = $manager->userComment($_POST);

            $username = $manager->getUserById($_SESSION['user_id']);
            $data = $manager->getComment($_POST['article_name']);
            echo json_encode(['data' => $data, 'username' => $username['username']]);
        }
        else 
        {
            $error = "Invalid data";
        }
    }

    public function delCommentAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $data = $manager->deleteComment($_POST['comment']);
        }
        else 
        {
            $error = "Invalid data";
        }
    }

    public function changeMdpAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $data = $manager->changePassword($_POST);
        }
        else
        {
            $error = "Invalid data";
        }
    }

    public function changeUsernameAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $data = $manager->changeUsername($_POST);
        }
        else
        {
            $error = "Invalid data";
        }
    }

    public function editItAction()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $manager = UserManager::getInstance();
            $data = $manager->changeArticle($_POST);
        }
        else
        {
            $error = "Invalid data";
        }
    }
}
