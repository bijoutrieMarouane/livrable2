<?php
// items
class productsControllers extends Controller
{


    private $itemsModel;

    public function __construct()
    {
        $this->itemsModel = $this->model('products');
    }

  


    public function add_products()
    {
        if (isset($_POST['submit'])) {
        
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $picture = $_POST['picture'];
            $quantity = $_POST['quantity'];
           
            
            $this->itemsModel->add_products($name,$price,$description ,$picture,$quantity);
            return $this->dashboard();

        }else{
            $this->view('add_products');
        }
        
    
    }




    public function dashboard()
    {
        $products = $this->itemsModel->get_products();

        if ($products) {
            $data = [
                'products' => $products
            ];
            $this->view('dashboard', $data);
        } else {
            echo ('product not found <br> <a href="'.URLROOT .'/Pages/add_products" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>');
        }
    }

    public function about()
    {
        $this->view('about');
    }


    public function updat_products($id)
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $picture = $_POST['picture'];
        $quantity = $_POST['quantity'];
        $id = $_POST['id'];
    }



    public function delete_products($id)
    {
        $this->itemsModel->delete_products($id);

        $products = $this->itemsModel->get_products();
        $data = [
            'products' => $products
        ];

        $this->view('dashboard', $data);
    }
}
