<?php
class users
{
    static public function selectItems()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM items ORDER BY id_i DESC');
        $stmt->execute();
        $items = $stmt->fetchAll();
        return $items;
    }

    static public function selectItemsByCategory()
    {
        $stmt = DB::connect()->prepare("SELECT 
										items.*, 
										categories.nameCat AS category_name
									FROM 
										items
									INNER JOIN 
                                        categories 
									ON 
                                        categories.id_cat = items.Cat_ID 
									ORDER BY 
                                        id_i DESC");

        // Execute The Statement

        $stmt->execute();

        // Assign To Variable 

        $items = $stmt->fetchAll();
        return $items;
    }

    static public function insertIntoItems($name, $desc, $img, $cat_ID, $prix, $quantity)
    {
        $stmt = DB::connect()->prepare('INSERT INTO 
                                                items (
                                                    name,
                                                    description, 
                                                    image, 
                                                    cat_ID,
                                                    prix,
                                                    quantité
                                                ) 
                                            VALUES (
                                                :zname,
                                                :zdescription,
                                                :zimage,
                                                :zcat_ID,
                                                :zprix,
                                                :zquantité
                                            )
                                        ');
        $stmt->execute(
            array(
                'zname' => $name,
                'zdescription' => $desc,
                'zimage' => $img,
                'zcat_ID' => $cat_ID,
                'zprix' => $prix,
                'zquantité' => $quantity
            )
        );
    }

    static public function updateItems($name, $desc, $img, $cat_ID, $prix, $quantity, $id_i)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        items 
    SET 
    name = ?,
    description = ?, 
    image = ?, 
    cat_ID = ?,
    prix = ?,
    quantité = ?
    WHERE 
        id_i = ?");

        $stmt->execute(array($name, $desc, $img, $cat_ID, $prix, $quantity, $id_i));
    }

    static public function deleteItems($id_i)
    {
        $stmt = DB::connect()->prepare("DELETE FROM items WHERE id_i = :zid");

        $stmt->bindParam(":zid", $id_i);

        $stmt->execute();
    }
}