<?php
class itemsController{

    public function selectItems()
    {
        $items = items::select();
        
        return $items;


    }
    public function selectItemsById()
    {
        $item = items::selectByID();
        return $item;
    }
    public function insertIntoItems()
    {
        if (isset($_POST['ADD'])) {
            $name = $_POST['name'];
            $prix = $_POST['price'];
            $img = $_POST['image'];
            items::insertInto($name, $img, $prix);
        }
    }
    public function updateItems()
    {
        $name = $_POST['name'];
        $img = $_POST['image'];
        $prix = $_POST['price'];
        $id_i = $_POST['id_i'];
        items::update($name, $img, $prix, $id_i);
    }
    static public function deleteItems()
    {
        $id_i = $_POST['id_i'];
        items::delete($id_i);
    }

}





