<?php

class UsersControllers extends controller
{
   
    private $userModel;
    function __construct()
    {
        $this->userModel = $this->model('user');
    }


    

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            

            $_POST = filter_input_array(INPUT_POST);

            //init data
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
      

        

            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Register User
            if ($this->userModel->register($data)) {
                header("location:" . URLROOT . "/UsersControllers/login");
                // $this->view("login");
            } else {
                die('Something went wrong');
            }
        } else {
            $this->view("register");
        }
    }


    public function login()
    {
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password']

            ];
       
            $check = $this->userModel->getUserByEmail($data['email']);

          
            if ($check == 1) {
                // user found
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                
                if ($loggedInUser) {
                    // Create session
                    $this->createUserSession($loggedInUser);
                    // header("location:" . URLROOT . "pages/home");
                    $this->view("home");
                } else {
                    $this->view("login");
                }
            } else {

                // Load view
                $this->view('login');
            }
        } else {

            // Load view
            $this->view('login');
        }
    }
    public function createUserSession($user)
    {
        $_SESSION['Id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
    }


    public function logout()
    {
        session_destroy();
        header("location: " . URLROOT . "UsersControllers/login");
    }
    public static function isLogged()
    {
        return $_SESSION['Id'] ?? false;
    }
}
