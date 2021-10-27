<?php

class Product
{
    public static function getProducts()
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM product ORDER BY 'id' desc LIMIT 8");
        try {
            $statement->execute();
            if ($statement->rowCount() > 0) {
                $products = $statement->fetchAll();

                return [
                    "status" => true,
                    "data" => $products
                ];
            } else {
                return [
                    "status" => false,
                    "message" => "No item found"
                ];
            };
        } catch (PDOException $e) {
            return [
                'success' => false,
                'error' => $e->getmessage()
            ];
        }
    }

    public static function getProduct($id)
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM product WHERE id = ?");
        try {
            $statement->execute([$id]);
            if ($statement->rowCount() > 0) {
                $product = $statement->fetch();

                return [
                    "status" => true,
                    "data" => $product
                ];
            } else {
                return [
                    "status" => false,
                    "message" => "Product not found"
                ];
            };
        } catch (PDOException $e) {
            return [
                'success' => false,
                'error' => $e->getmessage()
            ];
        }
    }
}
