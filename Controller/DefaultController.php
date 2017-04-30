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
            
            echo $this->renderView('user-home.html.twig', ['user' => $user['username']]);
            $article = $manager->getAllArticle();
            foreach ($article as $value) {
              $username = $manager->getUsername($value['userid']);
                echo $this->renderView('article.html.twig',
                       [
                           'title' => $value['title'], 
                           'description' => $value['description'],
                           'username' =>  $username['username'],
                           'date' => $value['date'],
                       ]);
            }
        }
        else {
          $manager = UserManager::getInstance();
          echo $this->renderView('public-home.html.twig');
          $article = $manager->getAllArticle();
            foreach ($article as $value) {
                $username = $manager->getUsername($value['userid']);
                echo $this->renderView('article-public.html.twig',
                       [
                           'title' => $value['title'], 
                           'description' => $value['description'],
                           'username' => $username['username'],
                           'date' => $value['date'],
                       ]);
            }
        }
    }

    public function articleAction()
    {
        echo $this->renderView('add-article.html.twig');
    }

    public function displayArticleAction()
    {
        if (!empty($_SESSION['user_id'])) 
        {     
        $manager = UserManager::getInstance();
        $article = $manager->getIdArticle($_POST['title-article']);
        $user = $manager->getUserById($_SESSION['user_id']);
        foreach ($article as $value) {
                $username = $manager->getUsername($value['userid']);
                echo $this->renderView('display-article.html.twig',
                       [
                           'title' => $value['title'], 
                           'description' => $value['description'],
                           'username' => $username['username'],
                           'user' => $user['username'],
                           'date' => $value['date'],
                       ]);
                $list = $manager->getComment($value['title']);
                foreach ($list as $comment) {
                  $username = $manager->getUsername($comment['userid']);
                  echo $this->renderView('commentaire.html.twig',
                    [
                    'comment' => $comment['comment'],
                    'username' => $username['username'],
                    'date' => $comment['date']
                    ]);
                }
        }
      }
      else
      {
        $manager = UserManager::getInstance();
        $article = $manager->getIdArticle($_POST['title-article']);
        foreach ($article as $value) {
            echo $this->renderView('display-article-public.html.twig',
                         [
                             'title' => $value['title'], 
                             'description' => $value['description'],
                             'date' => $value['date'],
                         ]);
            $list = $manager->getAllComment($value['title']);
            foreach ($list as $comment) {
              $username = $manager->getUsername($comment['userid']);
              echo $this->renderView('commentaire-public.html.twig',
                [
                  'comment' => $comment['comment'],
                  'username' => $username['username'],
                  'date' => $comment['date']
                ]);
            }
        }
      }
    }

    public function profilAction()
    {
        echo $this->renderView('profil.html.twig');
    }

    public function editArticleAction()
    {
        $manager = UserManager::getInstance();
        $article = $manager->getItArticle($_POST['title']);
        $user = $manager->getUserById($_SESSION['user_id']);
        echo $this->renderView('edit-article.html.twig', 
          [
            'title' => $article['title'],
            'user' => $user['username'],
            'description' => $article['description']
          ]);
    }
}
