<?php
// items
class itemsController{

    public function selectItems()
    {
        $items = items::selectItems();
        return $items;
    }
        public function selectItemsByCategory()
    {
        $itemsByCategory = items::selectItemsByCategory();
        return $itemsByCategory;
    }
    public function insertIntoItems()
    {
        $name = $_POST['nameItem'];
        $desc = $_POST['description'];
        $img = $_POST['image'];
        $cat_ID = $_POST['cat_ID'];
        $prix = $_POST['prix'];
        $quantity = $_POST['quant'];
        items::insertIntoItems($name, $desc, $img, $cat_ID, $prix, $quantity);
    }
    public function updateItems()
    {
        $name = $_POST['nameItem'];
        $desc = $_POST['description'];
        $img = $_POST['image'];
        $cat_ID = $_POST['cat_ID'];
        $prix = $_POST['prix'];
        $quantity = $_POST['quant'];
        $id_i = $_POST['id_i'];
        items::updateItems($name, $desc, $img, $cat_ID, $prix, $quantity, $id_i);
    }
    public function deleteItems()
    {
        $id_i = $_POST['id_i'];
        items::deleteItems($id_i);
    }

}
