<?php
class admin
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUserByEmail($email) 
    {
        $this->db->query("SELECT * FROM users WHERE email = :email and groupID = 1");
        $this->db->bind(":email", $email);
        $this->db->execute();
        if($this->db->rowCount()) return true;
        else
            return false;
    }
    public function register($name, $email, $password)
    {
        $groupID = 1;
        $this->db->query('INSERT INTO `users`(`username`, `email`, `password`, `groupID`) VALUES (:name,:email,:password,:groupID)');
        $this->db->bind(':name',$name);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        $this->db->bind(':groupID',$groupID);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function login($email,$password)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email and groupID = 1");
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