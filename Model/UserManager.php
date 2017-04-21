<?php

namespace Model;

class UserManager
{
    private $DBManager;
    
    private static $instance = null;
    public static function getInstance()
    {
        if (self::$instance === null)
            self::$instance = new UserManager();
        return self::$instance;
    }
    
    private function __construct()
    {
        $this->DBManager = DBManager::getInstance();
    }

    public function getUserById($id)
    {
        $id = (int)$id;
        $data = $this->DBManager->findOne("SELECT * FROM users WHERE id = ".$id);
        return $data;
    }
    
    public function getUserByUsername($username)
    {
        $data = $this->DBManager->findOneSecure("SELECT * FROM users WHERE username = :username",
                                ['username' => $username]);
        return $data;
    }
    
    public function userCheckRegister($data)
    {
        if (empty($data['username']) OR empty($data['email']) OR empty($data['password']))
            return false;
        $data = $this->getUserByUsername($data['username']);
        if ($data !== false)
            return false;
        // TODO : Check valid email
        return true;
    }
    
    private function userHash($pass)
    {
        $hash = password_hash($pass, PASSWORD_BCRYPT, ['salt' => 'saltysaltysaltysalty!!']);
        return $hash;
    }
    
    public function userRegister($data)
    {
        $user['username'] = $data['username'];
        $user['password'] = $this->userHash($data['password']);
        $user['email'] = $data['email'];
        $this->DBManager->insert('users', $user);
    }

    public function userArticle($data)
    {
        $user = $this->getUserById($_SESSION['user_id']);
        
        $article['username'] = $user['username'];
        $article['title'] = $data['title'];
        $article['description'] = $data['description'];
        $article['date'] = date('m/d/Y à h:i:s a', time());
        var_dump($article);
        $this->DBManager->insert('article', $article);
    }
    
    public function userCheckLogin($data)
    {
        if (empty($data['username']) OR empty($data['password']))
            return false;
        $user = $this->getUserByUsername($data['username']);
        if ($user === false)
            return false;
        $hash = $this->userHash($data['password']);
        if ($hash !== $user['password'])
        {
            return false;
        }
        return true;
    }
    
    public function userLogin($username)
    {
        $data = $this->getUserByUsername($username);
        if ($data === false)
            return false;
        $_SESSION['user_id'] = $data['id'];
        return true;
    }

    public function userComment($data)
    {
        $comment['article_name'] = $data['article_name'];
        $comment['username'] = $data['username'];
        $comment['comment'] = $data['comment'];
        $comment['date'] = date('m/d/Y à h:i:s a', time());
        $this->DBManager->insert('comment', $comment);
    }

    public function getArticle($username) {
        $data = $this->DBManager->findAllSecure("SELECT * FROM article WHERE username = :username", 
                                ['username' => $username]);
        return $data;
    }

    public function getComment($article_name) {
        $data= $this->DBManager->findOne("SELECT * FROM comment ORDER BY id DESC LIMIT 1");
        return $data;
    }

    public function getAllComment($article_name) {
        $data= $this->DBManager->findAllSecure("SELECT * FROM comment WHERE article_name = :article_name", 
                                ['article_name' => $article_name]);
        return $data;
    }
}


