<?php
require_once('./root.php');
require_once('./Product.php');
require_once('./Cart.php');

$isAuth = $GLOBALS['isAuthenticated'];

if ($_REQUEST['action'] === "add-to-cart") {
    if ($isAuth === true) {
        $product_id = $_POST['id'];
        return sendRequest(true, '', ["id" => $product_id]);
    } else {
        return sendRequest(false, '', []);
    }
};

if ($_REQUEST['action'] === "get-product") {
    $product = Product::getProduct($_POST['id'], true);

    if (isset($product) && !empty($product)) {
        return sendRequest(true, '', ["product" => $product]);
    } else {
        return sendRequest(false, '', []);
    }
};

sendRequest(false, "", []);
