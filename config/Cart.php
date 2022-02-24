<?php

class Cart
{
    public static function getCart()
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM cart ORDER BY 'id' desc");
        try {
            $statement->execute();
            $cart = $statement->fetchAll();

            return [
                "status" => true,
                "data" => $cart
            ];
        } catch (PDOException $e) {
            return [
                'status' => false,
                'error' => $e->getmessage()
            ];
        }
    }
    public static function addCart($id)
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM cart WHERE id = ?");
        $statement->execute([$id]);
        $cart  = $statement->fetchAll();
        return $cart;
        if ($statement->rowCount() < 0) {
            $product = Product::getProduct($id);
            //Item does not exist in the database
            //Add new item to cart
            // insert query
            $statement =  $GLOBALS['dbh']->prepare("INSERT INTO cart");
            $statement->execute([$id]);
            $product = $statement->fetch();
            return $product;
        }
        //Item exists in the database, so increase the quantity   
        // update query     
    }
}
