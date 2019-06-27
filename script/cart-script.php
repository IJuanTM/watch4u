<?php

// Als de cookie niet aanwezig is wordt die aangemaakt met een lege array.
if (!isset($_COOKIE['cart'])) {
    setcookie('cart', json_encode(array()));
}

// Als de cookie bestaat dan word de JSON array omgezet naar een PHP array. 
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
}

// Als de GET variabelen aanwezig zijn wordt de onderstaande code uitgevoerd. 
if (isset($_GET)) {

    // De GET variabele func wordt ondergebracht in een apparte variabele. 
    $func = $_GET['func'];

    // Als func gelijk is aan add dan word de add functie uitgevoerd en worden cart, product id en aantal meegestuurd.
    if ($func == 'add') $cart = add($cart, (int)$_GET['prodId'], (int)$_GET['ammount']);
    // Als func gelijk is aan remove word de remove functie uitgevoerd. 
    if ($func == 'remove') $cart = remove($cart, (int)$_GET['prodId']);

    // Als de functies zijn uitgevoerd is de variabele cart aangepast. 
    // Hieronder word de cookie cart weer gevuld met een JSON array
    // Daarna wordt de vorige pagina herladen. 
    setcookie('cart', json_encode($cart));
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

// Deze functie heeft 3 variabelen nodig. 
// Cart = array, die uit de cookie komt. prodId is product id uit de url evenals ammount.
// De array van de cart wordt opgebouwd met product id als key en ammount als value. 
// Hierdoor is het mogelijk om te selecteren op product id en de value makkelijk te updaten. 
function add($cart, $prodId, $ammount)
{
    if (isset($cart[$prodId])) {
        $cart[$prodId] = $cart[$prodId] + $ammount;
    } else {
        $cart[$prodId] = $ammount;
    }
    return $cart;
}

// Deze functie heeft maar 2 variabelen nodig.
// Cart = array, komt uit de cookie. Prodid komt uit de url.
// Met de product id kan er gezocht worden op product en dan wordt die verwijderd.  
function remove($cart, $prodId)
{
    if (isset($cart[$prodId])) {
        unset($cart[$prodId]);
    }
    return $cart;
}
