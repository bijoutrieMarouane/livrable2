<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUserByEmail($email) 
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(":email", $email);
        $this->db->execute();
        if($this->db->rowCount()) return true;
        else
            return false;
    }
    public function register($name, $email, $password)
    {
        $this->db->query('INSERT INTO users(username,email,password) VALUES (:name,:email,:password)');
        $this->db->bind(':name',$name);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function login($email,$password)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email',$email);
        $row = $this->db->fetch();
        $passwordData = $row->password;
        if ($password == $passwordData) {
            return $row;
        } else {
            return false;
        }
        
    }
}