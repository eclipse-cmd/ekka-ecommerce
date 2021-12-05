<?php

class Product
{
    public static function getProducts($api = false)
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM product ORDER BY 'id' desc LIMIT 8");
        try {
            $statement->execute();
            if ($statement->rowCount() > 0) {
                $products = $statement->fetchAll();

                if ($api === true) return $products;
                return [
                    "status" => true,
                    "data" => $products
                ];
            } else {
                if ($api === true) return false;
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

    public static function getProduct($id, $api = false)
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM product WHERE id = ?");
        try {
            $statement->execute([$id]);
            if ($statement->rowCount() > 0) {
                $product = $statement->fetch();

                if ($api === true) return $product;
                return [
                    "status" => true,
                    "data" => $product
                ];
            } else {
                if ($api === true) return false;
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
