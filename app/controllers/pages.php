<?php
class Pages extends Controller
{
   public $user;
    public function __construct()
    {
        $this->user = $this->model('user');
    }

     public function index()
    {
        echo "hi";
    } 

    public function home()
    {

        $data = [
            'title' => 'HomePage'
        ];
        $this->view('home',$data);
    }

    public function about()
    {

        $data = [
            'title' => 'about'
        ];
        $this->view('about',$data);
    }

    public function gallery()
    {

        $data = [
            'title' => 'gallery'
        ];
        $this->view('gallery',$data);
    }

    public function contact()
    {

        $data = [
            'title' => 'contact'
        ];
        $this->view('contact',$data);
    }

    public function login()
    {

        $data = [
            'title' => 'login'
        ];
        $this->view('login',$data);
    }

    public function register()
    {

        $data = [
            'title' => 'register'
        ];
        $this->view('register',$data);
    }


    public function dashboard()
    {

        $data = [
            'title' => 'dashboard'
        ];
        $this->view('dashboard',$data);
    }

    public function add_products()
    {

        $data = [
            'title' => 'add_products'
        ];
        $this->view('add_products',$data);
    }
}