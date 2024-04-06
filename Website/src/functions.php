<?php

function starsHtml($stars)
{
    switch ($stars) {
        case 0:
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 1:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 2:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 3:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 4:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 5:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            break;
        default:
            // handle cases greater than 5 or less than 0 if needed
            break;
    }
}



function getAllProducts()
{
    $products = [];
    $products['010'] = [
        'name' => 'Dog food',
        'description' => 'A filling, savoury snack for your dog.',
        'price' => 1.00,
        'stars' => 4,
        'image' => '../images/first_image.jpeg'
    ];
    $products['025'] = [
        'id' => 22,
        'name' => 'Doggy',
        'description' => 'Help doggy.',
        'price' => 2.00,
        'stars' => 5,
        'image' => '../images/third_image.jpg'
    ];
    $products['005'] = [
        'name' => 'Home stay dog',
        'description' => 'An exotic dog.',
        'price' => 3.00,
        'stars' => 2,
        'image' => '../images/petSitting.jpg'
    ];
    $products['021'] = [
        'name' => 'Test',
        'description' => 'The best test dog.',
        'price' => 4.50,
        'stars' => 3,
        'image' => '../images/daycare.jpg'
    ];
    $products['002'] = [
        'name' => 'Walking',
        'description' => 'The basis for a good walk.',
        'price' => 0.50,
        'stars' => 5,
        'image' => '../images/petWalking.jpg'
    ];
    return $products;
}



function getShoppingCart()
{
    // default is empty shopping cart array
    $cartItems = [];

    if (isset($_SESSION['cart'])) {
        $cartItems = $_SESSION['cart'];
    }

    return $cartItems;
}



function addItemToCart($id)
{
    $cartItems = getShoppingCart();
    $cartItems[$id] = 1;
    $_SESSION['cart'] = $cartItems;
}

function removeItemFromCart($id)
{
    $cartItems = getShoppingCart();
    unset($cartItems[$id]);
    $_SESSION['cart'] = $cartItems;
}


function getQuantity($id, $cart)
{
    if (isset($cart[$id])) {
        return $cart[$id];
    } else {
        return 0;
    }
}


function increaseCartQuantity($id)
{
    $cartItems = getShoppingCart();
    $quantity = getQuantity($id, $cartItems);
    $newQuantity = $quantity + 1;
    $cartItems[$id] = $newQuantity;
    $_SESSION['cart'] = $cartItems;
}


function reduceCartQuantity($id)
{
    $cartItems = getShoppingCart();
    $quantity = getQuantity($id, $cartItems);
    $newQuantity = $quantity - 1;
    if ($newQuantity < 1) {
        unset($cartItems[$id]);
    } else {
        $cartItems[$id] = $newQuantity;
    }
    $_SESSION['cart'] = $cartItems;
}



function displayProducts()
{
    $products = getAllProducts();
    require_once __DIR__ . '/../templates/list.php';
}

function PaymentMesaage(){
    require_once __DIR__ . '/../templates/PaymentMesaage.php';
}

function displayCart()
{
    $products = getAllProducts();
    $cartItems = getShoppingCart();
    if (!empty($cartItems)) {
        require_once __DIR__ . '/../templates/cart.php';
    } else {
        require_once __DIR__ . '/../templates/emptyCart.php';
    }
}

function displayCheckout(){
    require_once __DIR__ . '/../templates/checkout.php';
}
