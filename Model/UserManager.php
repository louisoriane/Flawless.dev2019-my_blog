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

    public function userArticle($data)
    {
        $user = $this->getUserById($_SESSION['user_id']);
        
        $article['userid'] = $user['id'];
        $article['title'] = $data['title'];
        $article['description'] = $data['description'];
        $article['date'] = date('m/d/Y à h:i:s a', time());
        $this->DBManager->insert('article', $article);
    }

    public function getArticle($userid) {
        $data = $this->DBManager->findAllSecure("SELECT * FROM article WHERE userid = :userid",['userid' => $userid]);
        return $data;
    }

    public function getUsername($id) {
        $data = $this->DBManager->findOneSecure("SELECT username FROM users WHERE id = :id",['id' => $id]);
        return $data;
    }

    public function getAllArticle() {
        $data = $this->DBManager->findAll("SELECT * FROM article");
        return $data;
    }

    public function getIdArticle($title) {
        $data = $this->DBManager->findAllSecure("SELECT * FROM article WHERE title = :title",['title' => $title]);
        return $data;
    }

    public function getAllComment($title) {
        $data = $this->DBManager->findAllSecure("SELECT * FROM comment WHERE article_name =:article_name",['article_name' => $title]);
        return $data;
    }

    public function getItArticle($title) {
        $data = $this->DBManager->findOneSecure("SELECT * FROM article WHERE title = :title",['title' => $title]);
        return $data;
    }

    public function userComment($data)
    {
        $user = $this->getUserById($_SESSION['user_id']);

        $comment['article_name'] = $data['article_name'];
        $comment['userid'] = $user['id'];
        $comment['comment'] = $data['comment'];
        $comment['date'] = date('m/d/Y à h:i:s a', time());
        $this->DBManager->insert('comment', $comment);
    }

    public function getComment($article_name) {
        $data= $this->DBManager->findAllSecure("SELECT * FROM comment WHERE article_name = :article_name ORDER BY id DESC",['article_name' => $article_name]);
        return $data;
    }

    public function deleteComment($comment) {
        var_dump($comment);
        $data= $this->DBManager->findOneSecure("DELETE FROM comment WHERE comment = :comment",['comment' => $comment]);
        var_dump($data);
        return $data;
    }

    public function changePassword($data) {
        $password = $data['new-mdp'];
        // $newpassword = $password;
        $user = $this->getUserById($_SESSION['user_id']); 

        $data= $this->DBManager->findOneSecure("UPDATE users SET password = :password WHERE username = :username", 
            [
                'password' => $password,
                'username' => $user['username']
            ]);
        return $data;
    }

    public function changeUsername($data) 
    { 
        // AJOUTER LES AUTRE TABLES
        $user = $this->getUserById($_SESSION['user_id']);

        $data= $this->DBManager->findAllSecure("UPDATE users SET username = :username WHERE id = :id", 
            [
                'username' => $data['username'],
                'id' => $user['id']
            ]);
        return $data;
    }

    public function changeArticle($data) 
    { 
        $user = $this->getUserById($_SESSION['user_id']);
        $data= $this->DBManager->findOneSecure("UPDATE article SET title = :title, description = :description WHERE userid = :userid", 
            [
                'title' => $data['title'],
                'description' => $data['description'],
                'userid' => $user['id']
            ]);
        return $data;
    }
}
