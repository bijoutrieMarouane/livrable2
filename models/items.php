<?php
require_once './database/connect.php';
class items
{
    static public function select()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM items');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function insertInto($name, $img, $prix)
    {
        $stmt = DB::connect()->prepare('INSERT INTO 
                                                items (
                                                    name,
                                                    image, 
                                                    prix,
                                                ) 
                                            VALUES (
                                                :zname,
                                                :zimage,
                                                :zprix,
                                            )
                                        ');
        $stmt->execute(
            array(
                'zname' => $name,
                'zimage' => $img,
                'zprix' => $prix
            )
        );
    }

    static public function update($name,$img,$prix,$id_i)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        items 
    SET 
    name = ?,
    image = ?, 
    prix = ?
    WHERE 
        id_i = ?");

        $stmt->execute(array($name, $img, $prix,$id_i));
    }

    static public function delete($id_i)
    {
        $stmt = DB::connect()->prepare("DELETE FROM items WHERE id_i = :zid");

        $stmt->bindParam(":zid", $id_i);

        $stmt->execute();
    }
}