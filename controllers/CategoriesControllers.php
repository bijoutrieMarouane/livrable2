<?php
// category
class categoryController{

    public function selectCategory()
    {
        $category = category::selectCategory();
        return $category;
    }
    public function insertIntoCategory()
    {
        $nameCat = $_POST['nameCat'];
        category::insertIntoCategory($nameCat);
    }
    public function updateCategory()
    {
        $nameCat = $_POST['nameCat'];
        $id_cat = $_POST['id_cat'];
        category::updateCategory($nameCat,$id_cat);
    }
    public function deleteCategory()
    {
        $id_cat = $_POST['id_cat'];
        category::deleteCategory($id_cat);
    }

}
?>