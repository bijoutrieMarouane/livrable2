<?php
class itemsController{

    public function selectItems()
    {
        $items = items::select();
        
        return $items;


    }
    public function insertIntoItems()
    {
        $name = $_POST['nameItem'];
        $img = $_POST['image'];
        $prix = $_POST['prix'];
        items::insertInto($name, $img, $prix);
    }
    public function updateItems()
    {
        $name = $_POST['nameItem'];
        $img = $_POST['image'];
        $prix = $_POST['prix'];
        $id_i = $_POST['id_i'];
        items::update($name, $img, $prix, $id_i);
    }
    static public function deleteItems()
    {
        $id_i = $_POST['id_i'];
        items::delete($id_i);
    }

}





