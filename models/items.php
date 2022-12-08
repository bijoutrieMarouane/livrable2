<?php
class items
{
    static public function selectItems()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM items ORDER BY id_i DESC');
        $stmt->execute();
        $items = $stmt->fetchAll();
        return $items;
    }

    static public function insertIntoItems($name, $img, $prix)
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

    static public function updateItems($name,$img,$prix,$id_i)
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

    static public function deleteItems($id_i)
    {
        $stmt = DB::connect()->prepare("DELETE FROM items WHERE id_i = :zid");

        $stmt->bindParam(":zid", $id_i);

        $stmt->execute();
    }
}