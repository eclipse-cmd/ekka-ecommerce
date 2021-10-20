<?php
session_start();
define('ROOT', '/ekka-ecommerce');
define('HOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'ekka');
$db_arrtributes = [
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$dbh = new PDO('mysql: host=' . HOST . '; dbname=' . DBNAME, DBUSER, DBPASS, $db_arrtributes);

$isAuthenticated = 'false';
if (isset($_SESSION['isAuth']) && $_SESSION['isAuth']['status'] === true) {
    $isAuthenticated = true;
}

function logOut(){
    session_unset('isAuth');
}

function print_e($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    exit;
}

function print_v($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}