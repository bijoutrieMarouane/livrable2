<?php
class users
{
    static public function selectCategory()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM categories');
        $stmt->execute();
        $items = $stmt->fetchAll();
        return $items;
    }
    static public function insertIntoCategory($nameCat)
    {
        $stmt = DB::connect()->prepare('INSERT INTO 
                                                categories (
                                                    nameCat
                                                ) 
                                            VALUES (
                                                :zname
                                            )
                                        ');
        $stmt->execute(
            array(
                'zname' => $nameCat
            )
        );
    }

    static public function updateCategory($nameCat,$id_cat)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        categories 
    SET 
    nameCat = ?
    WHERE 
        id_cat = ?");

        $stmt->execute(array($nameCat,$id_cat));
    }

    static public function deleteCategory($id_cat)
    {
        $stmt = DB::connect()->prepare("DELETE FROM categories WHERE id_cat = :zid");

        $stmt->bindParam(":zid", $id_cat);

        $stmt->execute();
    }
}