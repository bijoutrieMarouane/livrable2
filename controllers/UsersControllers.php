<?php
// users = admins + members
class usersController{

    static public function selectUsers()
    {
        $users = users::selectUsers();
        return $users;
    }
    static public function insertIntoUsers()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $avatar = $_POST['avatar'];
        users::insertIntoUsers($username, $email, $password, $avatar);
    }
    static public function updateUsers()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $avatar = $_POST['avatar'];
        $id_u = $_POST['id_u'];
        users::updateUsers($username, $email, $password, $avatar, $id_u);
    }
    static public function deleteUsers()
    {
        $id_u = $_POST['id_u'];
        users::deleteUsers($id_u);
    }

}


// admins
class adminsController
{
    static public function selectAdmins()
    {
        $users = admins::selectAdmins();
        return $users;
    }
    
}

// members

class membersController
{
    static public function selectMembers()
    {
        $users = members::selectMembers();
        return $users;
    }
}
?>