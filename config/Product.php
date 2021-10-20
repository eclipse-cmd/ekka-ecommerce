<?php

class Product
{
    public static function getProducts()
    {
        $statement = $GLOBALS['dbh']->prepare("SELECT * FROM product");
        try {
            $statement->execute();
            if($statement->rowCount() > 0){
             return [
                "status" => true,
                "data" => $statement->fetchAll()
             ];
            }else{
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
}