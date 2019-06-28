<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = json_encode(array());
}

if (isset($_SESSION['cart'])) {
    $cart = json_decode($_SESSION['cart'], true);
}

if (isset($_GET)) {

    $func = $_GET['func'];
    if ($func == 'add') $cart = add($cart, (int)$_GET['prodId'], (int)$_GET['ammount']);
    if ($func == 'remove') $cart = remove($cart, (int)$_GET['prodId']);

    $_SESSION['cart'] = json_encode($cart);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function add($cart, $prodId, $ammount)
{
    if (isset($cart[$prodId])) {
        $cart[$prodId] = $cart[$prodId] + $ammount;
    } else {
        $cart[$prodId] = $ammount;
    }
    return $cart;
}

function remove($cart, $prodId)
{
    if (isset($cart[$prodId])) {
        unset($cart[$prodId]);
    }
    return $cart;
}
