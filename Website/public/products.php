<?php  require_once '../layout/headerLoggedIn.php';



?>

<?php
require_once __DIR__ . '/../src/functions.php';
require_once __DIR__ . '/../templates/listProducts.php';
require_once __DIR__ . '/../templates/list.php';




require_once __DIR__ . '/../src/functions.php';

// try to find "action" in query-string variables
$action = filter_input(INPUT_GET, 'action');

switch ($action) {
    case 'cart':
        displayCart();
        break;
    case 'addToCart':
        $id = filter_input(INPUT_GET, 'id');
        addItemToCart($id);
        displayCart();
        break;
    case 'removeFromCart':
        $id = filter_input(INPUT_GET, 'id');
        removeItemFromCart($id);
        displayCart();
        break;
    case 'displayCheckout':
        $id = filter_input(INPUT_GET, 'id');
        displayCart();
        displayCheckout();
        break;
    case 'sendPayment':
        PaymentMesaage();
        break;
    case 'changeCartQuantity':
        $id = filter_input(INPUT_GET, 'id');
        $amount = filter_input(INPUT_POST, 'amount');
        if ($amount == 'increase') {
            increaseCartQuantity($id);
        } else {
            reduceCartQuantity($id);
        }
        displayCart();
        break;
    default:
        displayProducts();
        break;
}
?>


<?php require_once'../layout/footer.php'; ?>
