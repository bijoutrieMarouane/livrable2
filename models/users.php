<?php
require_once './database/connect.php';
// users = admins + members
class users
{
    static public function selectUsers()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users');
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
    static public function check($user, $pass)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST[$user];
            $password = $_POST[$pass];
            $hashedPass = sha1($password);
            $stmt = DB::connect()->prepare("SELECT 
                                        *
                                    FROM
                                        users
                                    WHERE 
                                        username = ? 
                                    AND
                                        password = ? 
                                    LIMIT 1");
            $stmt->execute(array($username, $hashedPass));
            $row = $stmt->fetch();
            $count = $stmt->rowCount();

            // If Count > 0 This Mean The Database Contain Record About This Username
            if ($count > 0) {
                $_SESSION['Username'] = $username; // Register Session Name
                $_SESSION['ID'] = $row['id_u']; // Register Session ID
                header('Location: admin'); // Redirect To home page
                exit();
            }
        }
    }

    static public function insertIntoUsers($username, $email, $password, $avatar)
    {
        $stmt = DB::connect()->prepare('INSERT INTO 
                                                users (
                                                    username,
                                                    email, 
                                                    password, 
                                                    avatar
                                                ) 
                                            VALUES (
                                                :zusername,
                                                :zemail,
                                                :zpassword,
                                                :zavatar
                                            )
                                        ');
        $stmt->execute(
            array(
                'zusername' => $username,
                'zemail' => $email,
                'zpassword' => $password,
                'zavatar' => $avatar
            )
        );
    }

    static public function updateUsers($username, $email, $password, $avatar, $id_u)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        users 
    SET 
    username = ?,
    email = ?, 
    password = ?, 
    avatar = ?
    WHERE 
        id_u = ?");

        $stmt->execute(array($username, $email, $password, $avatar, $id_u));
    }

    static public function deleteUsers($id_u)
    {
        $stmt = DB::connect()->prepare("DELETE FROM users WHERE id_u = :zid");

        $stmt->bindParam(":zid", $id_u);

        $stmt->execute();
    }
}

// admins
class admins
{
    static public function selectAdmins()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE group_id = 1');
        $stmt->execute();
        $admins = $stmt->fetchAll();
        return $admins;
    }

}

// members

class members
{
    static public function selectMembers()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE group_id = 0');
        $stmt->execute();
        $members = $stmt->fetchAll();
        return $members;
    }
}