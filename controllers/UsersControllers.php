<?php
// users = admins + members
class usersController{

    public function selectUsers()
    {
        $users = users::selectUsers();
        return $users;
    }

    public function checkUsers($user , $pass)
    {
        users::check($user , $pass);
    }

    public function insertIntoUsers()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $avatar = $_POST['avatar'];
        users::insertIntoUsers($username, $email, $password, $avatar);
    }
    public function updateUsers()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $avatar = $_POST['avatar'];
        $id_u = $_POST['id_u'];
        users::updateUsers($username, $email, $password, $avatar, $id_u);
    }
    public function deleteUsers()
    {
        $id_u = $_POST['id_u'];
        users::deleteUsers($id_u);
    }

}


// admins
class adminsController
{
    public function selectAdmins()
    {
        $users = admins::selectAdmins();
        return $users;
    }
    
}

// members

class membersController
{
    public function selectMembers()
    {
        $users = members::selectMembers();
        return $users;
    }
}
?>