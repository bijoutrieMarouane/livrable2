<?php
// items
class itemsController{

    static public function selectItems()
    {
        $items = items::selectItems();
        return $items;
    }
    static public function insertIntoItems()
    {
        $name = $_POST['nameItem'];
        $img = $_POST['image'];
        $prix = $_POST['prix'];
        items::insertIntoItems($name, $img, $prix);
    }
    static public function updateItems()
    {
        $name = $_POST['nameItem'];
        $img = $_POST['image'];
        $prix = $_POST['prix'];
        $id_i = $_POST['id_i'];
        items::updateItems($name, $img, $prix, $id_i);
    }
    static public function deleteItems()
    {
        $id_i = $_POST['id_i'];
        items::deleteItems($id_i);
    }

}
