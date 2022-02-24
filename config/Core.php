<?php
require_once('./root.php');
require_once('./Product.php');
require_once('./Cart.php');

$isAuth = $GLOBALS['isAuthenticated'];

if ($_REQUEST['action'] === "add-to-cart") {
    if ($isAuth === true) {
        $product_id = $_POST['id'];
        $response = Cart::addCart($product_id);
        return sendRequest(true, 'logged in', $response);
    } else {
        return sendRequest(false, 'Not Logged in', []);
    }
};
if ($_REQUEST['action'] === "set-session-cart") {
    $_SESSION['cart'] = $_POST['cart'];
    return sendRequest(true, 'session is set');
};
if ($_REQUEST['action'] === "get-cart") {
    if ($isAuth === true) {
        $response = Cart::getCart();
        if ($response['status'] === true) {
            return sendRequest(true, 'auth successful',  $response['data']);
        } else {
            return sendRequest(false, $response['error'], []);
        }
    } else {
        return sendRequest(false, 'auth failed', []);
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
if ($_REQUEST['action'] === "get-products") {
    $products = Product::getProducts($api = true);

    if (isset($products) && !empty($products)) {
        return sendRequest(true, '', ["products" => $products]);
    } else {
        return sendRequest(false, '', []);
    }
};

sendRequest(false, "", []);
